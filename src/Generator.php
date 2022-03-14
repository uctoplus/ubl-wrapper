<?php

namespace Uctoplus\UblWrapper;

use DOMDocument;
use Uctoplus\UblWrapper\UBL\Schema\MainDoc;
use Uctoplus\UblWrapper\UBL\v21\Version;
use Uctoplus\UblWrapper\UCT\UctList;
use Uctoplus\UblWrapper\XML\MainDocInterface;
use Uctoplus\UblWrapper\XML\XMLInterface;
use ZipArchive;

/**
 * Class Generator
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper
 */
class Generator
{
    protected $version = null;

    /**
     * @var MainDocInterface[]
     */
    protected $documents = [];

    private $formatOutput = true;

    public function __construct($version = Version::VERSION_CODE)
    {
        $this->version = $version;
    }

    public function addDocument(MainDocInterface $document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * @return int
     */
    public function getDocumentsCount()
    {
        return count($this->documents);
    }

    public function setFormattedOutput($value = true)
    {
        $this->formatOutput = $value;
    }

    /**
     * @param XMLInterface $documents
     * @return string
     */
    protected function generateXMLFile($document)
    {
        $xml = new DOMDocument("1.0", "utf-8");
        $xml->preserveWhiteSpace = false;
        $xml->formatOutput = $this->formatOutput;

        $xml->appendChild($xml->importNode($document->toXML()->documentElement, TRUE));

        return $xml->saveXML();
    }

    /**
     * @return string
     */
    public function output($aggregated = false)
    {
        if (count($this->documents) == 0) {
            throw new \Exception("No document has been added!");
        }

        if ($aggregated) {
            return $this->generateAgregatedXMLFile($this->documents);
        }

        return $this->generateXMLFile($this->documents[0]);
    }

    /**
     * @param $file
     * @return boolean
     */
    public function save($file_path, $aggregated = false)
    {
        $basename = basename($file_path);
        list($file_name, $file_extension) = explode('.', $basename, 2);

        $resultFileType = $this->guessResultFileType($aggregated);
        if ($file_extension != $resultFileType) {
            throw new \Exception("Incorrect file extension choosed");
        }

        $resultFileType = $this->guessResultFileType($aggregated);
        if ($resultFileType === "zip") {
            $zip = new \ZipArchive();
            $open = $zip->open($file_path, ZipArchive::CREATE);
            if ($open === false) {
                throw new \Exception("Unable to create ZIP!");
            }

            /** @var MainDoc $document */
            foreach ($this->documents as $key => $document) {
                $file_name = preg_replace('/[^a-z0-9]+/', '-', strtolower($document->getID()));
                $zip->addFromString($key . "_" . $file_name . ".xml", $this->generateXMLFile($document));
            }

            return $zip->close();
        }

        $result = $this->output($aggregated);
        return file_put_contents($file_path, $result) > 0;
    }

    /**
     * @param $aggregated
     * @return string
     */
    private function guessResultFileType($aggregated)
    {
        if (count($this->documents) > 1 && !$aggregated) {
            return "zip";
        }

        return "xml";
    }

    private function generateAgregatedXMLFile(array $documents)
    {
        $xml = new DOMDocument("1.0", "utf-8");
        $xml->preserveWhiteSpace = false;
        $xml->formatOutput = $this->formatOutput;

        $rootElement = $xml->createElement(UctList::XMLNS . ":" . UctList::TAG_LIST);
        $rootElement->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:' . UctList::XMLNS, UctList::XMLNS_URI);


        /** @var XMLInterface $node */
        foreach ($documents as $document) {
            $itemElement = $xml->createElement(UctList::XMLNS . ":" . UctList::TAG_DOCUMENT);
            $itemElement->appendChild($xml->importNode($document->toXML()->documentElement, TRUE));
            $rootElement->appendChild($itemElement);
        }

        $xml->appendChild($rootElement);

        return $xml->saveXML();
    }
}