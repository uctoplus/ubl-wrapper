<?php

use PHPUnit\Framework\TestCase;

/**
 * Class InvoiceGeneratorTest
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 */
class InvoiceGeneratorTest extends TestCase
{
    public function test_generate_xml()
    {
        $invoice = new \Uctoplus\UblWrapper\UBL\v21\MainDoc\Invoice();
        $invoice->setID(1);
        $invoice->setIssueDate(\Carbon\Carbon::now());
        $invoice->addNote("Note No. 1!!!");
        $invoice->addNote(new \Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType("Note No. 2!!!", ["languageID" => "en"]));

        $invoiceLine = new \Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\InvoiceLineType();
        $invoiceLine->setID("1");
        $invoiceLine->setLineExtensionAmount("555");

        $item = new \Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType();
        $item->setName("Item");

        $invoiceLine->setItem($item);

        $invoice->addInvoiceLine($invoiceLine);

        dump($invoice->toXML()->saveXML());
    }
}