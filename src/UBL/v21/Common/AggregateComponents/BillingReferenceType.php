<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;

/**
 * Class BillingReferenceType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getInvoiceDocumentReference()
 * @method self setInvoiceDocumentReference($value)
 * @method mixed getSelfBilledInvoiceDocumentReference()
 * @method self setSelfBilledInvoiceDocumentReference($value)
 * @method mixed getCreditNoteDocumentReference()
 * @method self setCreditNoteDocumentReference($value)
 * @method mixed getSelfBilledCreditNoteDocumentReference()
 * @method self setSelfBilledCreditNoteDocumentReference($value)
 * @method mixed getDebitNoteDocumentReference()
 * @method self setDebitNoteDocumentReference($value)
 * @method mixed getReminderDocumentReference()
 * @method self setReminderDocumentReference($value)
 * @method mixed getAdditionalDocumentReference()
 * @method self setAdditionalDocumentReference($value)
 * @method mixed getBillingReferenceLine()
 * @method self addBillingReferenceLine($value)
 * @method self setBillingReferenceLine($value)
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