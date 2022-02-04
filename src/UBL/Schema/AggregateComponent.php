<?php

namespace Uctoplus\UblWrapper\UBL\Schema;

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
    protected $namespace = "cac";

    protected $xmlns = "urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2";

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
        return $this->xmlns;
    }

    public function toXML()
    {
        $this->initXML();

        $rootElement = $this->xml->createElement($this->getTag());
        $this->xml->appendChild($rootElement);

        /** @var XMLInterface $node */
        foreach ($this->nodes as $node) {
            $this->appendElement($rootElement, $node);
        }

        return $this->xml;
    }
}