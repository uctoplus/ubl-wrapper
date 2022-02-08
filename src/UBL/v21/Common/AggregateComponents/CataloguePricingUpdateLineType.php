<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CustomerPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SupplierPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemLocationQuantityType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getContractorCustomerParty()
 * @method self setContractorCustomerParty($value)
 * @method mixed getSellerSupplierParty()
 * @method self setSellerSupplierParty($value)
 * @method mixed getRequiredItemLocationQuantity()
 * @method self setRequiredItemLocationQuantity($value)
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