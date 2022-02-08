<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EstimatedAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxIncludedIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;

/**
 * Class RequestForTenderLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getNote()
 * @method self addNote($value)
 * @method self setNote($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getMinimumQuantity()
 * @method self setMinimumQuantity($value)
 * @method mixed getMaximumQuantity()
 * @method self setMaximumQuantity($value)
 * @method mixed getTaxIncludedIndicator()
 * @method self setTaxIncludedIndicator($value)
 * @method mixed getMinimumAmount()
 * @method self setMinimumAmount($value)
 * @method mixed getMaximumAmount()
 * @method self setMaximumAmount($value)
 * @method mixed getEstimatedAmount()
 * @method self setEstimatedAmount($value)
 * @method mixed getDocumentReference()
 * @method self addDocumentReference($value)
 * @method self setDocumentReference($value)
 * @method mixed getDeliveryPeriod()
 * @method self addDeliveryPeriod($value)
 * @method self setDeliveryPeriod($value)
 * @method mixed getRequiredItemLocationQuantity()
 * @method self addRequiredItemLocationQuantity($value)
 * @method self setRequiredItemLocationQuantity($value)
 * @method mixed getWarrantyValidityPeriod()
 * @method self setWarrantyValidityPeriod($value)
 * @method mixed getItem()
 * @method self setItem($value)
 * @method mixed getSubRequestForTenderLine()
 * @method self addSubRequestForTenderLine($value)
 * @method self setSubRequestForTenderLine($value)
 */
class RequestForTenderLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:Quantity" => QuantityType::class,
        "cbc:MinimumQuantity" => MinimumQuantityType::class,
        "cbc:MaximumQuantity" => MaximumQuantityType::class,
        "cbc:TaxIncludedIndicator" => TaxIncludedIndicatorType::class,
        "cbc:MinimumAmount" => MinimumAmountType::class,
        "cbc:MaximumAmount" => MaximumAmountType::class,
        "cbc:EstimatedAmount" => EstimatedAmountType::class,
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:DeliveryPeriod" => PeriodType::class . "[]",
        "cac:RequiredItemLocationQuantity" => ItemLocationQuantityType::class . "[]",
        "cac:WarrantyValidityPeriod" => PeriodType::class,
        "cac:Item" => ItemType::class,
        "cac:SubRequestForTenderLine" => RequestForTenderLineType::class . "[]",
    ];

    protected $minOccurs = [
        "cac:Item" => 1,
    ];
}