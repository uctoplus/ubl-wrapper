<?php

namespace Uctoplus\UblWrapper;

use DOMDocument;
use DOMNode;
use Exception;
use Uctoplus\UblWrapper\Exceptions\FileNotFoundException;
use Uctoplus\UblWrapper\Exceptions\FileNotReadableException;
use Uctoplus\UblWrapper\UBL\Schema\MainDoc;

/**
 * Class Parser
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper
 */
class Parser
{
    /**
     * @var MainDoc[]
     */
    private $documents = [];

    public function fromFile($file)
    {
        if (!file_exists($file))
            throw new FileNotFoundException($file);

        $fileContent = file_get_contents($file);
        if (!$fileContent)
            throw new FileNotReadableException($file);

        return $this->fromString($fileContent);
    }

    public function fromString($string)
    {
        $xml = new DOMDocument();
        $xml->loadXML($string);

        /** @var DOMNode $childNode */
        foreach ($xml->childNodes as $childNode) {
            $class = $this->guessNodeClass($childNode);
            $model = new $class();

            if ($model instanceof MainDoc) {
                $this->documents[] = $model->fromXML($childNode);
            }
        }

        return $this;
    }

    /**
     * @return MainDoc[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param DOMNode $node
     * @return string
     * @throws Exception
     */
    private function guessNodeClass(DOMNode $node)
    {
        $class = "\\Uctoplus\\UblWrapper\\UBL\\v21\\MainDoc\\" . $node->nodeName;

        if (class_exists($class)) {
            return $class;
        }

        throw new Exception("Unable to guess model");
    }
}