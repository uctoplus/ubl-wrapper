<?php

use PHPUnit\Framework\TestCase;

/**
 * Class InvoiceParserTest
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 */
class InvoiceParserTest extends TestCase
{
    public function test_parse_xml()
    {
        $parser = new \Uctoplus\UblWrapper\Parser();
        $parser->fromFile('resources/UBL-Invoice-2.1-Example.xml');

//        dump($parser->getDocuments()[0]);
        file_put_contents("generated.xml", $parser->getDocuments()[0]->toXML()->saveXML());
    }
}