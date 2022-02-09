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
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method SupplyChainActivityTypeCodeType getSupplyChainActivityTypeCode()
 * @method self setSupplyChainActivityTypeCode(SupplyChainActivityTypeCodeType|string $value)
 * @method CustomerPartyType getBuyerCustomerParty()
 * @method self setBuyerCustomerParty(CustomerPartyType $value)
 * @method SupplierPartyType getSellerSupplierParty()
 * @method self setSellerSupplierParty(SupplierPartyType $value)
 * @method PeriodType getActivityPeriod()
 * @method self setActivityPeriod(PeriodType $value)
 * @method LocationType getActivityOriginLocation()
 * @method self setActivityOriginLocation(LocationType $value)
 * @method LocationType getActivityFinalLocation()
 * @method self setActivityFinalLocation(LocationType $value)
 * @method SalesItemType getSalesItem()
 * @method self addSalesItem(SalesItemType $value)
 * @method self setSalesItem(SalesItemType ...$values)
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