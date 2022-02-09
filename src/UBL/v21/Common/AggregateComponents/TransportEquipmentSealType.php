<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConditionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SealingPartyTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SealIssuerTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SealStatusCodeType;

/**
 * Class TransportEquipmentSealType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method SealIssuerTypeCodeType getSealIssuerTypeCode()
 * @method self setSealIssuerTypeCode(SealIssuerTypeCodeType|string $value)
 * @method ConditionType getCondition()
 * @method self setCondition(ConditionType|string $value)
 * @method SealStatusCodeType getSealStatusCode()
 * @method self setSealStatusCode(SealStatusCodeType|string $value)
 * @method SealingPartyTypeType getSealingPartyType()
 * @method self setSealingPartyType(SealingPartyTypeType|string $value)
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