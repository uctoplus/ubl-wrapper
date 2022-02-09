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
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method SubscriberIDType getSubscriberID()
 * @method self setSubscriberID(SubscriberIDType|string $value)
 * @method SubscriberTypeType getSubscriberType()
 * @method self setSubscriberType(SubscriberTypeType|string $value)
 * @method SubscriberTypeCodeType getSubscriberTypeCode()
 * @method self setSubscriberTypeCode(SubscriberTypeCodeType|string $value)
 * @method TotalDeliveredQuantityType getTotalDeliveredQuantity()
 * @method self setTotalDeliveredQuantity(TotalDeliveredQuantityType|string $value)
 * @method AddressType getAddress()
 * @method self setAddress(AddressType $value)
 * @method WebSiteAccessType getWebSiteAccess()
 * @method self setWebSiteAccess(WebSiteAccessType $value)
 * @method MeterType getUtilityMeter()
 * @method self addUtilityMeter(MeterType $value)
 * @method self setUtilityMeter(MeterType ...$values)
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