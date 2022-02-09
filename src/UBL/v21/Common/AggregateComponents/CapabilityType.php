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
 * @method CapabilityTypeCodeType getCapabilityTypeCode()
 * @method self setCapabilityTypeCode(CapabilityTypeCodeType|string $value)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method ValueAmountType getValueAmount()
 * @method self setValueAmount(ValueAmountType|string $value)
 * @method ValueQuantityType getValueQuantity()
 * @method self setValueQuantity(ValueQuantityType|string $value)
 * @method EvidenceSuppliedType getEvidenceSupplied()
 * @method self addEvidenceSupplied(EvidenceSuppliedType $value)
 * @method self setEvidenceSupplied(EvidenceSuppliedType ...$values)
 * @method PeriodType getValidityPeriod()
 * @method self setValidityPeriod(PeriodType $value)
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