<?php

namespace Uctoplus\UblWrapper\UBL\Schema;

use DOMDocument;
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
    protected $namespace = "cbc";
    protected $xmlns = "urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2";

    protected $attributeCasts = [];

    private $attributes = [];

    protected $tag = null;
    protected $value = null;

    protected $type = "string";

    public function __construct($value = null, $attributes = [], $tag = null)
    {
        if (!empty($tag)) {
            $tag = explode(":", $tag);
            $this->tag = array_pop($tag);
        }

        $this->value = $value;
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
        return $this->xmlns;
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

    public function toXML()
    {
        $this->xml = new DOMDocument("1.0", "utf-8");
        $this->xml->preserveWhiteSpace = false;
        $this->xml->formatOutput = true;

        $value = $this->castValue();

        $rootElement = $this->xml->createElement($this->getXMLNS() . ":" . $this->getTag(), $value);
        foreach ($this->attributes as $key => $value) {
            $rootElement->setAttribute($key, $value);
        }
        $this->xml->appendChild($rootElement);

        return $this->xml;
    }

    private function castValue()
    {
        switch ($this->type) {
            case "date":
                return $this->value->format('Y-m-d');
            case "datetime":
                return $this->value->toISOString();
            default:
                return $this->value;
        }
    }

}