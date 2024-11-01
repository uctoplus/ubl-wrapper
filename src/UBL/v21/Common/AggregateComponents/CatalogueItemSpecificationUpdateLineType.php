<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;

/**
 * Class CatalogueItemSpecificationUpdateLineType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method CustomerPartyType getContractorCustomerParty()
 * @method self setContractorCustomerParty(CustomerPartyType $value)
 * @method SupplierPartyType getSellerSupplierParty()
 * @method self setSellerSupplierParty(SupplierPartyType $value)
 * @method ItemType getItem()
 * @method self setItem(ItemType $value)
 */
class CatalogueItemSpecificationUpdateLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cac:ContractorCustomerParty" => CustomerPartyType::class,
        "cac:SellerSupplierParty" => SupplierPartyType::class,
        "cac:Item" => ItemType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cac:Item" => 1,
    ];
}