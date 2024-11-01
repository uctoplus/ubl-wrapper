<?php

namespace Uctoplus\UblWrapper\UBL\Schema;

use BadMethodCallException;
use Carbon\Carbon;
use DOMAttr;
use DOMDocument;
use DOMNode;
use Uctoplus\UblWrapper\Exceptions\XML\XSDRequiredAttributeException;
use Uctoplus\UblWrapper\Exceptions\XML\XSDValidationException;
use Uctoplus\UblWrapper\XML\XMLInterface;
use ValueError;

/**
 * Class BasicComponent
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\Schema
 */
abstract class BasicComponent implements XMLInterface
{
    const XMLNS_URI = "urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2";

    protected static $magicMethods = [];

    protected $namespace = "cbc";

    protected $xmlns_uri = null;

    protected $attributeCasts = [];

    protected $attributes = [];

    protected $tag = null;
    protected $value = null;

    protected $type = "";

    protected $predeclaredCharacters = array('&', '<', '>', '"', "'");

    /**
     * @var DOMDocument
     */
    protected $xml;

    public function __construct($value = null, $attributes = [], $tag = null)
    {
        $this->bootMagicMethods();

        if (!empty($tag)) {
            $tag = explode(":", $tag);
            $this->tag = array_pop($tag);
        }

        if ($value !== null) {
            $this->setValue($value);
        }

        foreach ($attributes as $attribute => $_value) {
            $this->$attribute = $_value;
        }
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

    /**
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        if (!(is_scalar($value) || $value instanceof Carbon)) {
            throw new ValueError("BasicComponent[" . get_class($this) . " -> " . $this->tag . "] value has to be type scalar!");
        }

        $this->value = $value;
        return $this;
    }

    /**
     * @return string|null
     */
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

    protected function initXML()
    {
        // Validate required Attributes
        foreach ($this->attributeCasts as $attribute => $required) {
            if ($required && empty($this->getAttribute($attribute))) {
                throw new XSDRequiredAttributeException($this->getTag(), $attribute);
            }
        }

        if ($this->value === null)
            throw new ValueError("Value for BasicComponent[" . get_class($this) . ' -> ' . $this->getTag() . "] is empty!");

        $this->xml = new DOMDocument("1.0", "utf-8");
        $this->xml->preserveWhiteSpace = false;
        $this->xml->formatOutput = true;
    }

    public function toXML()
    {
        $this->initXML();

        $value = $this->__toString();

        $rootElement = $this->xml->createElement($this->getXMLNS() . ":" . $this->getTag());
        $rootElement->appendChild($this->createCDATASection($value));
        foreach ($this->attributes as $key => $value) {
            $rootElement->setAttribute($key, $value);
        }
        $this->xml->appendChild($rootElement);

        return $this->xml;
    }

    public function createCDATASection($value)
    {
        foreach ($this->predeclaredCharacters as $c) {
            if (stripos($value, $c) !== false) {
                return $this->xml->createCDATASection($value);
            }
        }

        return $this->xml->createTextNode($value);
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

    /**
     * @param $method
     * @param $arguments
     * @return mixed
     */
    public function __call($method, $arguments)
    {
        if (!is_array(static::$magicMethods) || count(static::$magicMethods) == 0) {
            throw new BadMethodCallException(sprintf(
                'Call to undefined method %s::%s()', static::class, $method
            ));
        }

        if (array_key_exists($method, static::$magicMethods)) {
            $methodType = substr($method, 0, 3);
            $key = static::$magicMethods[$method];
            if ($methodType === "get") {
                return $this->$key;
            }

            $this->$key = $arguments[0];

            return $this;
        }

        throw new BadMethodCallException(sprintf(
            'Call to undefined method %s::%s()', static::class, $method
        ));
    }

    public function __get($name)
    {
        return $this->attributes[$name];
    }

    public function __set($name, $value)
    {
        if (!isset($this->attributeCasts[$name])) {
            throw new XSDRequiredAttributeException(get_class($this) . "–>" . $this->tag, $name);
        }

        if (!is_scalar($value)) {
            throw new XSDValidationException($name, $this->attributeCasts[$name]);
        }

        $this->attributes[$name] = $value;
    }

    /**
     * Determine if an attribute or relation exists on the model.
     *
     * @param string $key
     * @return bool
     */
    public function __isset($key)
    {
        return isset($this->attributes[$key]);
    }

    private function bootMagicMethods()
    {
        foreach ($this->attributeCasts as $attribute => $required) {
            static::$magicMethods["get" . ucfirst($attribute) . "Attribute"] = $attribute;
            static::$magicMethods["set" . ucfirst($attribute) . "Attribute"] = $attribute;
        }
    }


}