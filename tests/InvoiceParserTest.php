<?php

use PHPUnit\Framework\TestCase;

class InvoiceParserTest extends TestCase
{
    public function test_parse_xml()
    {
        $parser = new \Uctoplus\UblWrapper\Parser();
        $parser->fromFile('resources/UBL-Invoice-2.1-Example.xml');

        dump($parser);
    }
}