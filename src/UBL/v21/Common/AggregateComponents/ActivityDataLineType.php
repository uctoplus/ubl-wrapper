<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SupplyChainActivityTypeCodeType;

/**
 * Class ActivityDataLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getSupplyChainActivityTypeCode()
 * @method self setSupplyChainActivityTypeCode($value)
 * @method mixed getBuyerCustomerParty()
 * @method self setBuyerCustomerParty($value)
 * @method mixed getSellerSupplierParty()
 * @method self setSellerSupplierParty($value)
 * @method mixed getActivityPeriod()
 * @method self setActivityPeriod($value)
 * @method mixed getActivityOriginLocation()
 * @method self setActivityOriginLocation($value)
 * @method mixed getActivityFinalLocation()
 * @method self setActivityFinalLocation($value)
 * @method mixed getSalesItem()
 * @method self addSalesItem($value)
 * @method self setSalesItem($value)
 */
class ActivityDataLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:SupplyChainActivityTypeCode" => SupplyChainActivityTypeCodeType::class,
        "cac:BuyerCustomerParty" => CustomerPartyType::class,
        "cac:SellerSupplierParty" => SupplierPartyType::class,
        "cac:ActivityPeriod" => PeriodType::class,
        "cac:ActivityOriginLocation" => LocationType::class,
        "cac:ActivityFinalLocation" => LocationType::class,
        "cac:SalesItem" => SalesItemType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:SupplyChainActivityTypeCode" => 1,
        "cac:ActivityOriginLocation" => 1,
        "cac:SalesItem" => 1,
    ];
}