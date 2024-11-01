<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EstimatedConsumedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;

/**
 * Class OnAccountPaymentType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method EstimatedConsumedQuantityType getEstimatedConsumedQuantity()
 * @method self setEstimatedConsumedQuantity(EstimatedConsumedQuantityType|string $value)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method PaymentTermsType[] getPaymentTerms()
 * @method self addPaymentTerms(PaymentTermsType $value)
 * @method self setPaymentTerms(PaymentTermsType ...$values)
 */
class OnAccountPaymentType extends AggregateComponent
{
    protected $casts = [
        "cbc:EstimatedConsumedQuantity" => EstimatedConsumedQuantityType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cac:PaymentTerms" => PaymentTermsType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:EstimatedConsumedQuantity" => 1,
        "cac:PaymentTerms" => 1,
    ];
}