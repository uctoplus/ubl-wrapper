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
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getContractorCustomerParty()
 * @method self setContractorCustomerParty($value)
 * @method mixed getSellerSupplierParty()
 * @method self setSellerSupplierParty($value)
 * @method mixed getRequiredItemLocationQuantity()
 * @method self addRequiredItemLocationQuantity($value)
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