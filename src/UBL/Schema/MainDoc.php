<?php

namespace Uctoplus\UblWrapper\UBL\Schema;

use DOMNode;
use Uctoplus\UblWrapper\XML\BaseXMLElement;
use Uctoplus\UblWrapper\XML\XMLInterface;

/**
 * Class MainDoc
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\Schema
 */
abstract class MainDoc extends BaseXMLElement implements XMLInterface
{
    protected $UBLVersionID = '2.1';

    protected $tag = "";

    protected $namespace = "";
    protected $xmlns = "";

    private $xmlnss = [];

    /**
     * @return string
     */
    public function getTag()
    {
        if (empty($this->tag)) {
            $path = explode('\\', get_class($this));
            return array_pop($path);
        }

        return $this->tag;
    }

    public function setTag($tag)
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return string
     */
    public function getXMLNS()
    {
        return $this->namespace;
    }

    public function getXMLNS_URI()
    {
        return $this->xmlns;
    }

    public function toXML()
    {
        $this->initXML();

        $rootElement = $this->xml->createElement($this->getTag());
        $rootElement->setAttributeNS(null, 'xmlns' . (empty($this->getXMLNS()) ? "" : ":" . $this->getXMLNS()), $this->getXMLNS_URI());
        foreach ($this->xmlnss as $xmlns => $uri) {
            $rootElement->setAttributeNS(null, $uri, 'xmlns:' . $xmlns);
        }

        $UBLVersionID = $this->xml->createElement('cbc:UBLVersionID', $this->UBLVersionID);
        $rootElement->appendChild($UBLVersionID);

        $this->xml->appendChild($rootElement);

        /** @var XMLInterface $node */
        foreach ($this->extensions as $node) {
            $this->appendElement($rootElement, $node);
        }

        /** @var XMLInterface $node */
        foreach ($this->nodes as $node) {
            $this->appendElement($rootElement, $node);
        }

        return $this->xml;
    }

    public function fromXML(DOMNode $node)
    {
        /** @var DOMNode $childNode */
        foreach ($node->childNodes as $childNode) {
            if ($childNode->nodeType != XML_ELEMENT_NODE)
                continue;

            $tag = $childNode->nodeName;

            if (!isset($this->casts[$tag])) {
                continue;
            }

            $this->$tag = $this->parseNode($tag, $childNode);
        }

        return $this;
    }

    private function parseNode($tag, DOMNode $childNode)
    {
        $nodeClass = rtrim($this->casts[$tag], "[]");
        $nodeModel = new $nodeClass;

        $isArray = false;
        if ($nodeClass != $this->casts[$tag])
            $isArray = true;

        $nodeModel->fromXml($childNode);

        if ($isArray) {
            if (!isset($this->$tag)) {
                $this->$tag = [];
            }

            return array_merge($this->$tag, [$nodeModel]);
        }

        return $nodeModel;
    }

}