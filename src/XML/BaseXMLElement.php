<?php

namespace Uctoplus\UblWrapper\XML;

use BadMethodCallException;
use Carbon\Carbon;
use DOMDocument;
use DOMNode;
use Uctoplus\UblWrapper\Exceptions\XML\XSDCastNotExistsException;
use Uctoplus\UblWrapper\Exceptions\XML\XSDElementNotImplementedException;
use Uctoplus\UblWrapper\Exceptions\XML\XSDMinOccurException;
use Uctoplus\UblWrapper\Exceptions\XML\XSDValidationException;
use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;
use ValueError;

/**
 * Class BaseXMLElement
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\XML
 */
abstract class BaseXMLElement
{
    protected $nodes = [];

    protected $extensions = [];

    /**
     * @var array
     */
    protected $casts = [];

    /**
     * @var array
     */
    protected $minOccurs = [];

    protected static $magicMethods = [];

    /**
     * @var DOMDocument
     */
    protected $xml;

    /**
     * @return DOMDocument
     */
    abstract function toXml();

    public function __construct()
    {
        foreach ($this->casts as $_method => $cast) {
            list($namespace, $methodName) = explode(':', $_method);

            static::$magicMethods["get" . $methodName] = $_method;

            if (strpos($cast, "[]") > -1)
                static::$magicMethods["add" . $methodName] = $_method;

            static::$magicMethods["set" . $methodName] = $_method;
        }
    }

    /**
     * @param $method
     * @param $arguments
     * @return mixed
     */
    public function __call($method, $arguments)
    {
        if (array_key_exists($method, static::$magicMethods)) {
            $methodType = substr($method, 0, 3);
            $key = static::$magicMethods[$method];
            if ($methodType === "get") {
                return $this->$key;
            }

            if ($methodType === "add") {
                if (!isset($this->$key)) {
                    $this->$key = [];
                }

                $this->$key = array_merge($this->$key, $this->cast($key, $arguments));
            } elseif ($methodType === "set") {
                if ($this->isCastArray($key)) {
                    $this->$key = $arguments;
                } else {
                    $this->$key = $arguments[0];
                }
            }
            return $this;
        }

        throw new BadMethodCallException(sprintf(
            'Call to undefined method %s::%s()', static::class, $method
        ));
    }

    public function __get($name)
    {
        return $this->nodes[$name] ?? null;
    }

    public function __set($name, $value)
    {
        if (!isset($this->casts[$name])) {
            throw new XSDCastNotExistsException($name);
        }

        $is_array = false;

        $cast = rtrim($this->casts[$name], "[]");
        if ($cast != $this->casts[$name])
            $is_array = true;

        $value = $this->cast($name, $value);

        if ($is_array) {
            if (!is_array($value))
                throw new XSDValidationException($name, $this->casts[$name]);

            foreach ($value as $key => $item) {
                if (!$this->validateCast($item, $cast))
                    throw new XSDValidationException($name . "." . $key, $this->casts[$name]);
            }
        } else {
            if (!$this->validateCast($value, $this->casts[$name])) {
                throw new XSDValidationException($name, $this->casts[$name]);
            }
        }

        $this->nodes[$name] = $value;
    }

    /**
     * Determine if an attribute or relation exists on the model.
     *
     * @param string $key
     * @return bool
     */
    public function __isset($key)
    {
        return isset($this->nodes[$key]);
    }

    private function validateCast($value, $castClass)
    {
        if (class_exists($castClass)) {
            $castObj = new $castClass;
            if ((is_scalar($value) || $value instanceof Carbon) && $castObj instanceof BasicComponent) {
                return true;
            }

            if ($value instanceof $castClass) {
                return true;
            }
        }

        return false;
    }

    private function cast($name, $value)
    {
        if (is_array($value)) {
            $result = [];
            foreach ($value as $item) {
                $result[] = $this->cast($name, $item);
            }
            return $result;
        }

        $componentClass = rtrim($this->casts[$name], "[]");

        if ($value instanceof XMLInterface)
            return $value->setTag($name);

        if (class_exists($componentClass)) {
            return new $componentClass($value, [], $name);
        }

        throw new XSDElementNotImplementedException($componentClass);
    }

    public function getNodes()
    {
        return $this->nodes;
    }

    protected function initXML()
    {
        // Validate required nodes
        foreach ($this->minOccurs as $tag => $minOccur) {
            if (!isset($this->$tag)) {
                throw new XSDMinOccurException(get_class($this) . ' -> ' . $tag, $minOccur);
            }
        }

        $this->xml = new DOMDocument("1.0", "utf-8");
        $this->xml->preserveWhiteSpace = false;
        $this->xml->formatOutput = true;
    }

    /**
     * @param DOMNode $rootElement
     * @param XMLInterface|XMLInterface[] $nodes
     * @return void
     */
    protected function appendElement(DOMNode $rootElement, $nodes)
    {
        if (!is_array($nodes)) {
            $nodes = [$nodes];
        }

        foreach ($nodes as $node) {
            try {
                $rootElement->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns' . (empty($node->getXMLNS()) ? "" : ":" . $node->getXMLNS()), $node->getXMLNS_URI());
                $rootElement->appendChild($this->xml->importNode($node->toXML()->documentElement, TRUE));
            } catch (ValueError $e) {
                throw new ValueError((!empty($this->tag) ? $this->tag . " -> " : "") . $e->getMessage());
            }
        }
    }

    protected function guessNamespace($namespaceURI)
    {
        switch ($namespaceURI) {
            case BasicComponent::XMLNS_URI:
                return "cbc";
            case AggregateComponent::XMLNS_URI:
                return "cac";
            default:
                return null;
        }
    }

    private function isCastArray($key)
    {
        return rtrim($this->casts[$key], "[]") !== $this->casts[$key];
    }
}
