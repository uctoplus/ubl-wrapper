<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SealIssuerTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ConditionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SealStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SealingPartyTypeType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getSealIssuerTypeCode()
 * @method self setSealIssuerTypeCode($value)
 * @method mixed getCondition()
 * @method self setCondition($value)
 * @method mixed getSealStatusCode()
 * @method self setSealStatusCode($value)
 * @method mixed getSealingPartyType()
 * @method self setSealingPartyType($value)
 */
class TransportEquipmentSealType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:SealIssuerTypeCode" => SealIssuerTypeCodeType::class,
        "cbc:Condition" => ConditionType::class,
        "cbc:SealStatusCode" => SealStatusCodeType::class,
        "cbc:SealingPartyType" => SealingPartyTypeType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}