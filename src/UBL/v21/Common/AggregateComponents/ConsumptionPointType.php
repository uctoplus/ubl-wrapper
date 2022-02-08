<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SubscriberIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SubscriberTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SubscriberTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalDeliveredQuantityType;

/**
 * Class ConsumptionPointType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getSubscriberID()
 * @method self setSubscriberID($value)
 * @method mixed getSubscriberType()
 * @method self setSubscriberType($value)
 * @method mixed getSubscriberTypeCode()
 * @method self setSubscriberTypeCode($value)
 * @method mixed getTotalDeliveredQuantity()
 * @method self setTotalDeliveredQuantity($value)
 * @method mixed getAddress()
 * @method self setAddress($value)
 * @method mixed getWebSiteAccess()
 * @method self setWebSiteAccess($value)
 * @method mixed getUtilityMeter()
 * @method self addUtilityMeter($value)
 * @method self setUtilityMeter($value)
 */
class ConsumptionPointType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:SubscriberID" => SubscriberIDType::class,
        "cbc:SubscriberType" => SubscriberTypeType::class,
        "cbc:SubscriberTypeCode" => SubscriberTypeCodeType::class,
        "cbc:TotalDeliveredQuantity" => TotalDeliveredQuantityType::class,
        "cac:Address" => AddressType::class,
        "cac:WebSiteAccess" => WebSiteAccessType::class,
        "cac:UtilityMeter" => MeterType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}