# UBL Wrapper

![GitHub Workflow Status (branch)](https://img.shields.io/github/workflow/status/uctoplus/ubl-wrapper/PHPUnit/main)
![Codecov](https://img.shields.io/codecov/c/github/uctoplus/ubl-wrapper?token=35cae89f-6885-4687-9eef-64eb219acd13)

## About The Project

You can install new

```bash 
$ composer require uctoplus/ubl-wrapper
```

## Supported UBL versions

### UBL 2.1

http://docs.oasis-open.org/ubl/os-UBL-2.1/UBL-2.1.html

### _[comming soon] UBL 2.3_

http://docs.oasis-open.org/ubl/os-UBL-2.3/UBL-2.3.html

<!-- GETTING STARTED -->

## Getting Started

To get a local copy up and running follow these simple steps.

### Generate UBL Documents

```php
$generator = new Generator();

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
$generator->save( 'path/to/file.xml' );
```

When multiple documents are provided to generator zip file will be generated as default. When flag `$aggregated=true` is
provided to `$generator->save( $file_path, $aggregated = false);`, aggregated XML will be generated using UCT xsd
scheme. This is useful for Import/Export in large amount of documents.

### Parse UBL Documents

```php
$parser = new Parser();
$parser->fromFile('tests/resources/UBL-Invoice-2.1-Example.xml');

$parser->getDocuments();
```

## About The Author

This package was created by **Účto+ / doq.to** to provide support for UBL standard.
