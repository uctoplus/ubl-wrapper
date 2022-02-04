<?php

namespace Uctoplus\UblWrapper\XML;

interface XMLInterface
{
    /**
     * @return string
     */
    public function getTag();

    /**
     * @return string
     */
    public function setTag($tag);

    /**
     * @return string
     */
    public function getXMLNS();

    /**
     * @return string
     */
    public function getXMLNS_URI();

    /**
     * @return \DOMDocument
     */
    public function toXML();

    /**
     * @return self
     */
    public function fromXML(\DOMNode $node);
}