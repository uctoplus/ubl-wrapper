<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CurrentChargeTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CurrentChargeTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OneTimeChargeTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OneTimeChargeTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PackQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PackSizeNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SubscriberIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SubscriberTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SubscriberTypeType;

/**
 * Class UtilityItemType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method SubscriberIDType getSubscriberID()
 * @method self setSubscriberID(SubscriberIDType|string $value)
 * @method SubscriberTypeType getSubscriberType()
 * @method self setSubscriberType(SubscriberTypeType|string $value)
 * @method SubscriberTypeCodeType getSubscriberTypeCode()
 * @method self setSubscriberTypeCode(SubscriberTypeCodeType|string $value)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method PackQuantityType getPackQuantity()
 * @method self setPackQuantity(PackQuantityType|string $value)
 * @method PackSizeNumericType getPackSizeNumeric()
 * @method self setPackSizeNumeric(PackSizeNumericType|string $value)
 * @method ConsumptionTypeType getConsumptionType()
 * @method self setConsumptionType(ConsumptionTypeType|string $value)
 * @method ConsumptionTypeCodeType getConsumptionTypeCode()
 * @method self setConsumptionTypeCode(ConsumptionTypeCodeType|string $value)
 * @method CurrentChargeTypeType getCurrentChargeType()
 * @method self setCurrentChargeType(CurrentChargeTypeType|string $value)
 * @method CurrentChargeTypeCodeType getCurrentChargeTypeCode()
 * @method self setCurrentChargeTypeCode(CurrentChargeTypeCodeType|string $value)
 * @method OneTimeChargeTypeType getOneTimeChargeType()
 * @method self setOneTimeChargeType(OneTimeChargeTypeType|string $value)
 * @method OneTimeChargeTypeCodeType getOneTimeChargeTypeCode()
 * @method self setOneTimeChargeTypeCode(OneTimeChargeTypeCodeType|string $value)
 * @method TaxCategoryType getTaxCategory()
 * @method self setTaxCategory(TaxCategoryType $value)
 * @method ContractType getContract()
 * @method self setContract(ContractType $value)
 */
class UtilityItemType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:SubscriberID" => SubscriberIDType::class,
        "cbc:SubscriberType" => SubscriberTypeType::class,
        "cbc:SubscriberTypeCode" => SubscriberTypeCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:PackQuantity" => PackQuantityType::class,
        "cbc:PackSizeNumeric" => PackSizeNumericType::class,
        "cbc:ConsumptionType" => ConsumptionTypeType::class,
        "cbc:ConsumptionTypeCode" => ConsumptionTypeCodeType::class,
        "cbc:CurrentChargeType" => CurrentChargeTypeType::class,
        "cbc:CurrentChargeTypeCode" => CurrentChargeTypeCodeType::class,
        "cbc:OneTimeChargeType" => OneTimeChargeTypeType::class,
        "cbc:OneTimeChargeTypeCode" => OneTimeChargeTypeCodeType::class,
        "cac:TaxCategory" => TaxCategoryType::class,
        "cac:Contract" => ContractType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}