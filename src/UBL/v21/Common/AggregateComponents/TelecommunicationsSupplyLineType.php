<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PhoneNumberType;

/**
 * Class TelecommunicationsSupplyLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getPhoneNumber()
 * @method self setPhoneNumber($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getLineExtensionAmount()
 * @method self setLineExtensionAmount($value)
 * @method mixed getExchangeRate()
 * @method self addExchangeRate($value)
 * @method self setExchangeRate($value)
 * @method mixed getAllowanceCharge()
 * @method self addAllowanceCharge($value)
 * @method self setAllowanceCharge($value)
 * @method mixed getTaxTotal()
 * @method self addTaxTotal($value)
 * @method self setTaxTotal($value)
 * @method mixed getTelecommunicationsService()
 * @method self addTelecommunicationsService($value)
 * @method self setTelecommunicationsService($value)
 */
class TelecommunicationsSupplyLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:PhoneNumber" => PhoneNumberType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:LineExtensionAmount" => LineExtensionAmountType::class,
        "cac:ExchangeRate" => ExchangeRateType::class . "[]",
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:TaxTotal" => TaxTotalType::class . "[]",
        "cac:TelecommunicationsService" => TelecommunicationsServiceType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:PhoneNumber" => 1,
        "cac:TelecommunicationsService" => 1,
    ];
}