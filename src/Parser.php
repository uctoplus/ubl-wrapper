<?php

namespace Uctoplus\UblWrapper;

use DOMDocument;
use DOMNode;
use Exception;
use Uctoplus\UblWrapper\Exceptions\FileNotFoundException;
use Uctoplus\UblWrapper\Exceptions\FileNotReadableException;
use Uctoplus\UblWrapper\UBL\Schema\MainDoc;
use Uctoplus\UblWrapper\UCT\UctList;

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

        if ($this->isZip($file)) {
            return $this->fromZip($file);
        }

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
            if ($childNode->nodeType != XML_ELEMENT_NODE)
                continue;

            $class = $this->guessNodeClass($childNode);

            if (UctList::class == $class) {
                /** @var DOMNode $uctDocument */
                foreach ($childNode->childNodes as $uctDocument) {
                    if ($uctDocument->nodeType != XML_ELEMENT_NODE)
                        continue;

                    foreach ($uctDocument->childNodes as $mainDoc) {
                        if ($mainDoc->nodeType != XML_ELEMENT_NODE)
                            continue;

                        $class = $this->guessNodeClass($mainDoc);
                        $model = new $class();

                        if ($model instanceof MainDoc) {
                            $this->documents[] = $model->fromXML($childNode);
                        }
                    }
                }
            } else {
                $model = new $class();

                if ($model instanceof MainDoc) {
                    $this->documents[] = $model->fromXML($childNode);
                }
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
    protected function guessNodeClass(DOMNode $node)
    {
        $class = "\\Uctoplus\\UblWrapper\\UBL\\v21\\MainDoc\\" . $node->nodeName;

        if (class_exists($class)) {
            return $class;
        }

        if ($node->nodeName === "uct:list") {
            return UctList::class;
        }

        throw new Exception("Unable to guess model of " . $node->nodeName);
    }

    private function isZip($file)
    {
        $basename = basename($file);
        list($name, $extension) = explode('.', $basename, 2);

        return $extension === "zip";
    }

    protected function fromZip($file)
    {
        $zip = new \ZipArchive();
        if ($zip->open($file) === TRUE) {
            $zip->extractTo(sys_get_temp_dir() . "/unzip");
            $zip->close();

            foreach (glob(sys_get_temp_dir() . "/unzip/*.xml") as $filename) {
                $fileContent = file_get_contents($filename);
                if (!$fileContent)
                    throw new FileNotReadableException($file);

                $this->fromString($fileContent);
            }
            return $this;
        }

        throw new FileNotReadableException($file);
    }
}