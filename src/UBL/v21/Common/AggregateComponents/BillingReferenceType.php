<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;

/**
 * Class BillingReferenceType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method DocumentReferenceType getInvoiceDocumentReference()
 * @method self setInvoiceDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType getSelfBilledInvoiceDocumentReference()
 * @method self setSelfBilledInvoiceDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType getCreditNoteDocumentReference()
 * @method self setCreditNoteDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType getSelfBilledCreditNoteDocumentReference()
 * @method self setSelfBilledCreditNoteDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType getDebitNoteDocumentReference()
 * @method self setDebitNoteDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType getReminderDocumentReference()
 * @method self setReminderDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType getAdditionalDocumentReference()
 * @method self setAdditionalDocumentReference(DocumentReferenceType $value)
 * @method BillingReferenceLineType getBillingReferenceLine()
 * @method self addBillingReferenceLine(BillingReferenceLineType $value)
 * @method self setBillingReferenceLine(BillingReferenceLineType ...$values)
 */
class BillingReferenceType extends AggregateComponent
{
    protected $casts = [
        "cac:InvoiceDocumentReference" => DocumentReferenceType::class,
        "cac:SelfBilledInvoiceDocumentReference" => DocumentReferenceType::class,
        "cac:CreditNoteDocumentReference" => DocumentReferenceType::class,
        "cac:SelfBilledCreditNoteDocumentReference" => DocumentReferenceType::class,
        "cac:DebitNoteDocumentReference" => DocumentReferenceType::class,
        "cac:ReminderDocumentReference" => DocumentReferenceType::class,
        "cac:AdditionalDocumentReference" => DocumentReferenceType::class,
        "cac:BillingReferenceLine" => BillingReferenceLineType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}