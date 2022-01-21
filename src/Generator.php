<?php

namespace Uctoplus\UblWrapper;

use Uctoplus\UblWrapper\UBL\v21\Version;

/**
 * Class Generator
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper
 */
class Generator
{
    protected $version = null;

    /**
     * @var \DOMDocument
     */
    protected $xml;

    public function __construct($version = Version::VERSION_CODE)
    {
        $this->version = $version;
        $this->xml = new \DOMDocument();
    }

    protected function generateXML()
    {

    }

    /**
     * @return void
     */
    public function output()
    {

    }

    /**
     * @param $file
     * @return void
     */
    public function save($file)
    {

    }
}