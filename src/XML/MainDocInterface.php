<?php

namespace Uctoplus\UblWrapper\XML;

use DOMDocument;

interface MainDocInterface
{
    /**
     * @return DOMDocument
     */
    public function toXML();
}