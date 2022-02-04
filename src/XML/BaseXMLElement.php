<?php

namespace Uctoplus\UblWrapper\XML;

use BadMethodCallException;
use DOMDocument;
use DOMNode;
use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;
use Uctoplus\UblWrapper\XML\Exceptions\XSDElementNotImplementedException;
use Uctoplus\UblWrapper\XML\Exceptions\XSDMinOccurException;
use Uctoplus\UblWrapper\XML\Exceptions\XSDValidationException;

/**
 * Class BaseXMLElement
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
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

    private static $magicMethods = [];

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

    public function _magicMethods()
    {
        dump(array_keys(static::$magicMethods));
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
                $this->$key = $arguments[0];
            }
            return $this;
        }

        throw new BadMethodCallException(sprintf(
            'Call to undefined method %s::%s()', static::class, $method
        ));
    }

    public function __get($name)
    {
        return $this->nodes[$name];
    }

    public function __set($name, $value)
    {
        if (isset($this->casts[$name])) {
            $is_array = false;

            $cast = str_replace("[]", "", $this->casts[$name]);
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
            if ($castObj instanceof BasicComponent) {
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

    protected function initXML()
    {
        foreach ($this->minOccurs as $tag => $minOccur) {
            if (!isset($this->$tag)) {
                throw new XSDMinOccurException($tag, $minOccur);
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
            $rootElement->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns' . (empty($node->getXMLNS()) ? "" : ":" . $node->getXMLNS()), $node->getXMLNS_URI());
            $rootElement->appendChild($this->xml->importNode($node->toXML()->documentElement, TRUE));
        }
    }
}