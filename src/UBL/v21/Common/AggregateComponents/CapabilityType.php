<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CapabilityTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueQuantityType;

/**
 * Class CapabilityType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getCapabilityTypeCode()
 * @method self setCapabilityTypeCode($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getValueAmount()
 * @method self setValueAmount($value)
 * @method mixed getValueQuantity()
 * @method self setValueQuantity($value)
 * @method mixed getEvidenceSupplied()
 * @method self addEvidenceSupplied($value)
 * @method self setEvidenceSupplied($value)
 * @method mixed getValidityPeriod()
 * @method self setValidityPeriod($value)
 */
class CapabilityType extends AggregateComponent
{
    protected $casts = [
        "cbc:CapabilityTypeCode" => CapabilityTypeCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:ValueAmount" => ValueAmountType::class,
        "cbc:ValueQuantity" => ValueQuantityType::class,
        "cac:EvidenceSupplied" => EvidenceSuppliedType::class . "[]",
        "cac:ValidityPeriod" => PeriodType::class,
    ];

    protected $minOccurs = [
    ];
}