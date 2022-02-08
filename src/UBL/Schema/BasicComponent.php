<?php

namespace Uctoplus\UblWrapper\UBL\Schema;

use DOMAttr;
use DOMDocument;
use DOMNode;
use Uctoplus\UblWrapper\XML\XMLInterface;

/**
 * Class BasicComponent
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\Schema
 */
abstract class BasicComponent implements XMLInterface
{
    const XMLNS_URI = "urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2";

    protected $namespace = "cbc";

    protected $xmlns_uri = null;

    protected $attributeCasts = [];

    protected $attributes = [];

    protected $tag = null;
    protected $value = null;

    protected $type = "string";

    public function __construct($value = null, $attributes = [], $tag = null)
    {
        if (!empty($tag)) {
            $tag = explode(":", $tag);
            $this->tag = array_pop($tag);
        }

        $this->value = trim($value);
        $this->attributes = $attributes;
    }

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

    public function getValue()
    {
        return $this->value;
    }

    public function getAttribute($key)
    {
        if (isset($this->attributes[$key]))
            return $this->attributes[$key];

        return null;
    }

    public function __toString()
    {
        return (string)$this->value;
    }

    public function toXML()
    {
        $this->xml = new DOMDocument("1.0", "utf-8");
        $this->xml->preserveWhiteSpace = false;
        $this->xml->formatOutput = true;

        $value = $this->__toString();

        $rootElement = $this->xml->createElement($this->getXMLNS() . ":" . $this->getTag(), $value);
        foreach ($this->attributes as $key => $value) {
            $rootElement->setAttribute($key, $value);
        }
        $this->xml->appendChild($rootElement);

        return $this->xml;
    }

    public function fromXML(DOMNode $node)
    {
        $this->value = $node->nodeValue;

        /** @var DOMAttr $attribute */
        foreach ($node->attributes as $attribute) {
            $this->attributes[$attribute->name] = trim($attribute->value);
        }

        return $this;
    }

}