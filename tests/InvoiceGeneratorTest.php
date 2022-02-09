<?php

use Carbon\Carbon;
use Greenter\Ubl\UblValidator;
use PHPUnit\Framework\TestCase;
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
class InvoiceGeneratorTest extends TestCase
{
    public function test_generate_xml()
    {
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

        $this->assertNotEquals(0, file_put_contents("generated.xml", $invoice->toXML()->saveXML()));
    }

    /**
     * @depends test_generate_xml
     *
     */
    public function test_validate_final_xml()
    {
        $ubl = new UblValidator();
        $xml = file_get_contents('generated.xml');
        $this->assertTrue($ubl->isValid($xml));
    }

    public function test_validation_min_occurence_xml()
    {
        $invoice = new Invoice();
        $invoice->setID(1);
        $invoice->setIssueDate(Carbon::now());
        $invoice->addNote("Note No. 1!!!");
        $invoice->addNote(new NoteType("Note No. 2!!!", ["languageID" => "en"]));

        try {
            $invoice->toXML()->saveXML();
            $this->assertTrue(false);
        } catch (Exception $e) {
            $this->assertTrue(true);
        }
    }

    public function test_validation_req_attribute_xml()
    {
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

        try {
            $invoice->toXML()->saveXML();
            $this->assertTrue(false);
        } catch (Exception $e) {
            $this->assertTrue(true);
        }
    }

    public function test_validate_wrong_attribute_xml()
    {
        try {
            $invoice = new Invoice();
            $invoice->setID(1);
            $invoice->setIssueDate(Carbon::now());
            $invoice->addNote("Note No. 1!!!");
            $invoice->addNote(new NoteType("Note No. 2!!!", ["čamba-wamba" => "en"]));

            $this->assertTrue(false);
        } catch (Exception $e) {
            $this->assertTrue(true);
        }
    }

    public function test_validate_wrong_method_value_xml()
    {
        try {
            $invoice = new Invoice();
            $invoice->setID(new Invoice());

            $this->assertTrue(false);
        } catch (Exception $e) {
            $this->assertTrue(true);
        }
    }

    public function test_validate_wrong_method_xml()
    {
        try {
            $invoice = new Invoice();
            $invoice->setCAMBAWAMBA(new Invoice());

            $this->assertTrue(false);
        } catch (Exception $e) {
            $this->assertTrue(true);
        }
    }
}