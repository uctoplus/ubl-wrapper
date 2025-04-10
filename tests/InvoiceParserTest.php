<?php

namespace Tests\Uctoplus\UblWrapper;

use Greenter\Ubl\UblValidator;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\TestCase;
use Uctoplus\UblWrapper\Parser;

/**
 * Class InvoiceParserTest
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, a.s.
 */
class InvoiceParserTest extends TestCase
{
    public function test_parse_xml()
    {
        $parser = new Parser();
        $parser->fromFile('tests/resources/UBL-Invoice-2.1-Example.xml');

//        dump($parser->getDocuments()[0]);
        file_put_contents("generated.xml", $parser->getDocuments()[0]->toXML()->saveXML());
        $this->assertFileExists("generated.xml");
    }

    #[Depends('test_parse_xml')]
    public function test_validate_final_xml()
    {
        $ubl = new UblValidator();
        $xml = file_get_contents('generated.xml');
        $this->assertTrue($ubl->isValid($xml));
    }

}