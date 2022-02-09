<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;

/**
 * Class CataloguePricingUpdateLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method CustomerPartyType getContractorCustomerParty()
 * @method self setContractorCustomerParty(CustomerPartyType $value)
 * @method SupplierPartyType getSellerSupplierParty()
 * @method self setSellerSupplierParty(SupplierPartyType $value)
 * @method ItemLocationQuantityType getRequiredItemLocationQuantity()
 * @method self addRequiredItemLocationQuantity(ItemLocationQuantityType $value)
 * @method self setRequiredItemLocationQuantity(ItemLocationQuantityType ...$values)
 */
class CataloguePricingUpdateLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cac:ContractorCustomerParty" => CustomerPartyType::class,
        "cac:SellerSupplierParty" => SupplierPartyType::class,
        "cac:RequiredItemLocationQuantity" => ItemLocationQuantityType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}