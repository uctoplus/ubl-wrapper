<?php

namespace Tests\Uctoplus\UblWrapper;

use Carbon\Carbon;
use PHPUnit\Framework\TestCase;
use Uctoplus\UblWrapper\Parser;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CustomerPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\InvoiceLineType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\MonetaryTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SupplierPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PayableAmountType;
use Uctoplus\UblWrapper\UBL\v21\MainDoc\Invoice;

/**
 * Class InvoiceGeneratorTest
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 */
class AggregatedGeneratorTest extends TestCase
{
    public function test_generate_xml()
    {
        $generator = new \Uctoplus\UblWrapper\Generator();

        $invoice = new Invoice();
        $invoice->setID(1);
        $invoice->setIssueDate(Carbon::now());
        $invoice->addNote("Note No. 1!!!");
        $invoice->addNote(new NoteType("Note No. 2!!!", ["languageID" => "en"]));


        // Create AccountingSupplierParty
        $accountingSupplierParty = new SupplierPartyType();
        $invoice->setAccountingSupplierParty($accountingSupplierParty);

        // Create AccountingCustomerParty
        $accountingCustomerParty = new CustomerPartyType();
        $invoice->setAccountingCustomerParty($accountingCustomerParty);

        // Create LegalMonetaryTotal
        $legalMonetaryTotal = new MonetaryTotalType();

        $payableAmount = new PayableAmountType();
        $payableAmount->setCurrencyIDAttribute("EUR");
        $payableAmount->setValue(15.35);
        $legalMonetaryTotal->setPayableAmount($payableAmount);
        $invoice->setLegalMonetaryTotal($legalMonetaryTotal);

        // Create InvoiceLine
        $invoiceLine = new InvoiceLineType();
        $invoiceLine->setID("1");
        $invoiceLine->setLineExtensionAmount(new LineExtensionAmountType("555", ["currencyID" => "EUR"]));

        $item = new ItemType();
        $item->setName("Item");

        $invoiceLine->setItem($item);

        $invoice->addInvoiceLine($invoiceLine);

        $generator->addDocument($invoice);
        $generator->addDocument($invoice);

        $this->assertTrue($generator->save("generated.xml", true));
    }

    /**
     * @depends test_generate_xml
     *
     */
    public function test_parse_aggregated_file_xml()
    {
        $parser = new Parser();
        $parser->fromFile('generated.xml');

        $this->assertCount(2, $parser->getDocuments());

        try {
            $invoice = $parser->getDocuments()[0];
            $invoice->toXML()->saveXML();

            $this->assertTrue(true);
        } catch (Exception $e) {
            $this->assertTrue(false);
        }
    }

    public function test_generate_zip()
    {
        $generator = new \Uctoplus\UblWrapper\Generator();

        $invoice = new Invoice();
        $invoice->setID(1);
        $invoice->setIssueDate(Carbon::now());
        $invoice->addNote("Note No. 1!!!");
        $invoice->addNote(new NoteType("Note No. 2!!!", ["languageID" => "en"]));


        // Create AccountingSupplierParty
        $accountingSupplierParty = new SupplierPartyType();
        $invoice->setAccountingSupplierParty($accountingSupplierParty);

        // Create AccountingCustomerParty
        $accountingCustomerParty = new CustomerPartyType();
        $invoice->setAccountingCustomerParty($accountingCustomerParty);

        // Create LegalMonetaryTotal
        $legalMonetaryTotal = new MonetaryTotalType();

        $payableAmount = new PayableAmountType();
        $payableAmount->setCurrencyIDAttribute("EUR");
        $payableAmount->setValue(15.35);
        $legalMonetaryTotal->setPayableAmount($payableAmount);
        $invoice->setLegalMonetaryTotal($legalMonetaryTotal);

        // Create InvoiceLine
        $invoiceLine = new InvoiceLineType();
        $invoiceLine->setID("1");
        $invoiceLine->setLineExtensionAmount(new LineExtensionAmountType("555", ["currencyID" => "EUR"]));

        $item = new ItemType();
        $item->setName("Item");

        $invoiceLine->setItem($item);

        $invoice->addInvoiceLine($invoiceLine);

        $generator->addDocument($invoice);
        $generator->addDocument($invoice);

        $this->assertTrue($generator->save("generated.zip"));
    }

    /**
     * @depends test_generate_zip
     *
     */
    public function test_parse_generated_zip()
    {
        $parser = new Parser();
        $parser->fromFile('generated.zip');

        $this->assertCount(2, $parser->getDocuments());
    }
}