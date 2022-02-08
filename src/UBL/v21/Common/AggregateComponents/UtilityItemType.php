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
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getSubscriberID()
 * @method self setSubscriberID($value)
 * @method mixed getSubscriberType()
 * @method self setSubscriberType($value)
 * @method mixed getSubscriberTypeCode()
 * @method self setSubscriberTypeCode($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getPackQuantity()
 * @method self setPackQuantity($value)
 * @method mixed getPackSizeNumeric()
 * @method self setPackSizeNumeric($value)
 * @method mixed getConsumptionType()
 * @method self setConsumptionType($value)
 * @method mixed getConsumptionTypeCode()
 * @method self setConsumptionTypeCode($value)
 * @method mixed getCurrentChargeType()
 * @method self setCurrentChargeType($value)
 * @method mixed getCurrentChargeTypeCode()
 * @method self setCurrentChargeTypeCode($value)
 * @method mixed getOneTimeChargeType()
 * @method self setOneTimeChargeType($value)
 * @method mixed getOneTimeChargeTypeCode()
 * @method self setOneTimeChargeTypeCode($value)
 * @method mixed getTaxCategory()
 * @method self setTaxCategory($value)
 * @method mixed getContract()
 * @method self setContract($value)
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