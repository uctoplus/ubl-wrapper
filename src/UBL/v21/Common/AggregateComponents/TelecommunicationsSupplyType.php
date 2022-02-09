<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PrivacyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TelecommunicationsSupplyTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TelecommunicationsSupplyTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalAmountType;

/**
 * Class TelecommunicationsSupplyType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method TelecommunicationsSupplyTypeType getTelecommunicationsSupplyType()
 * @method self setTelecommunicationsSupplyType(TelecommunicationsSupplyTypeType|string $value)
 * @method TelecommunicationsSupplyTypeCodeType getTelecommunicationsSupplyTypeCode()
 * @method self setTelecommunicationsSupplyTypeCode(TelecommunicationsSupplyTypeCodeType|string $value)
 * @method PrivacyCodeType getPrivacyCode()
 * @method self setPrivacyCode(PrivacyCodeType|string $value)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method TotalAmountType getTotalAmount()
 * @method self setTotalAmount(TotalAmountType|string $value)
 * @method TelecommunicationsSupplyLineType getTelecommunicationsSupplyLine()
 * @method self addTelecommunicationsSupplyLine(TelecommunicationsSupplyLineType $value)
 * @method self setTelecommunicationsSupplyLine(TelecommunicationsSupplyLineType ...$values)
 */
class TelecommunicationsSupplyType extends AggregateComponent
{
    protected $casts = [
        "cbc:TelecommunicationsSupplyType" => TelecommunicationsSupplyTypeType::class,
        "cbc:TelecommunicationsSupplyTypeCode" => TelecommunicationsSupplyTypeCodeType::class,
        "cbc:PrivacyCode" => PrivacyCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:TotalAmount" => TotalAmountType::class,
        "cac:TelecommunicationsSupplyLine" => TelecommunicationsSupplyLineType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:PrivacyCode" => 1,
        "cac:TelecommunicationsSupplyLine" => 1,
    ];
}