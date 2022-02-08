<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AwardingCriterionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AwardingCriterionDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getAwardingCriterionID()
 * @method self setAwardingCriterionID($value)
 * @method mixed getAwardingCriterionDescription()
 * @method self setAwardingCriterionDescription($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getAmount()
 * @method self setAmount($value)
 * @method mixed getSubordinateAwardingCriterionResponse()
 * @method self setSubordinateAwardingCriterionResponse($value)
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