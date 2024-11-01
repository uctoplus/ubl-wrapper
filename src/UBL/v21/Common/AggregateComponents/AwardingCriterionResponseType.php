<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AwardingCriterionDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AwardingCriterionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;

/**
 * Class AwardingCriterionResponseType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method AwardingCriterionIDType getAwardingCriterionID()
 * @method self setAwardingCriterionID(AwardingCriterionIDType|string $value)
 * @method AwardingCriterionDescriptionType[] getAwardingCriterionDescription()
 * @method self addAwardingCriterionDescription(AwardingCriterionDescriptionType|string $value)
 * @method self setAwardingCriterionDescription(AwardingCriterionDescriptionType ...$values)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method QuantityType getQuantity()
 * @method self setQuantity(QuantityType|string $value)
 * @method AmountType getAmount()
 * @method self setAmount(AmountType|string $value)
 * @method AwardingCriterionResponseType[] getSubordinateAwardingCriterionResponse()
 * @method self addSubordinateAwardingCriterionResponse(AwardingCriterionResponseType $value)
 * @method self setSubordinateAwardingCriterionResponse(AwardingCriterionResponseType ...$values)
 */
class AwardingCriterionResponseType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:AwardingCriterionID" => AwardingCriterionIDType::class,
        "cbc:AwardingCriterionDescription" => AwardingCriterionDescriptionType::class . "[]",
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:Quantity" => QuantityType::class,
        "cbc:Amount" => AmountType::class,
        "cac:SubordinateAwardingCriterionResponse" => AwardingCriterionResponseType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}