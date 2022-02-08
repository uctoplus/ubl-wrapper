<?php

namespace Uctoplus\UblWrapper\UBL\Schema;

use DOMNode;
use Uctoplus\UblWrapper\XML\BaseXMLElement;
use Uctoplus\UblWrapper\XML\XMLInterface;

/**
 * Class AggregateComponent
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\Schema
 */
abstract class AggregateComponent extends BaseXMLElement implements XMLInterface
{
    const XMLNS_URI = "urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2";

    protected $namespace = "cac";

    protected $xmlns_uri = null;

    protected $tag = null;

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    public function setTag($tag)
    {
        $tag = explode(":", $tag);
        $this->tag = array_pop($tag);

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
        if (!empty($this->xmlns_uri))
            return $this->xmlns_uri;

        return static::XMLNS_URI;
    }

    public function toXML()
    {
        $this->initXML();

        $rootElement = $this->xml->createElement($this->getXMLNS() . ":" . $this->getTag());
        $this->xml->appendChild($rootElement);

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

            if (strpos($childNode->nodeName, ":") === false) {
                $namespace = $this->guessNamespace($childNode->namespaceURI);
                if ($namespace != null) {
                    $tag = $namespace . ":" . $tag;
                }
            }

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