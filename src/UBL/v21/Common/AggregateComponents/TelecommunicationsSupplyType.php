<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TelecommunicationsSupplyTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TelecommunicationsSupplyTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PrivacyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TelecommunicationsSupplyLineType;

/**
 *
 * @method mixed getTelecommunicationsSupplyType()
 * @method self setTelecommunicationsSupplyType($value)
 * @method mixed getTelecommunicationsSupplyTypeCode()
 * @method self setTelecommunicationsSupplyTypeCode($value)
 * @method mixed getPrivacyCode()
 * @method self setPrivacyCode($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getTotalAmount()
 * @method self setTotalAmount($value)
 * @method mixed getTelecommunicationsSupplyLine()
 * @method self setTelecommunicationsSupplyLine($value)
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