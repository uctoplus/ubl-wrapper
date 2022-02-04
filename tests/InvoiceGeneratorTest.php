<?php

use PHPUnit\Framework\TestCase;

class InvoiceGeneratorTest extends TestCase
{
    public function test_generate_xml()
    {
        $invoice = new \Uctoplus\UblWrapper\UBL\v21\MainDoc\Invoice();
        $invoice->setID(1);
        $invoice->setIssueDate(\Carbon\Carbon::now());
        $invoice->addNote("kokooooottt!!!");
        $invoice->addNote(new \Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType("kokooooottt!!!", ["languageID" => "en"]));

        dump($invoice->toXML()->saveXML());
    }

    /**
     * @depends test_generate_xml
     */
    public function test_parse_xml()
    {

    }
}