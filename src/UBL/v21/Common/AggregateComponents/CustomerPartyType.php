<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AdditionalAccountIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomerAssignedAccountIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SupplierAssignedAccountIDType;

/**
 * Class CustomerPartyType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method CustomerAssignedAccountIDType getCustomerAssignedAccountID()
 * @method self setCustomerAssignedAccountID(CustomerAssignedAccountIDType|string $value)
 * @method SupplierAssignedAccountIDType getSupplierAssignedAccountID()
 * @method self setSupplierAssignedAccountID(SupplierAssignedAccountIDType|string $value)
 * @method AdditionalAccountIDType[] getAdditionalAccountID()
 * @method self addAdditionalAccountID(AdditionalAccountIDType|string $value)
 * @method self setAdditionalAccountID(AdditionalAccountIDType ...$values)
 * @method PartyType getParty()
 * @method self setParty(PartyType $value)
 * @method ContactType getDeliveryContact()
 * @method self setDeliveryContact(ContactType $value)
 * @method ContactType getAccountingContact()
 * @method self setAccountingContact(ContactType $value)
 * @method ContactType getBuyerContact()
 * @method self setBuyerContact(ContactType $value)
 */
class CustomerPartyType extends AggregateComponent
{
    protected $casts = [
        "cbc:CustomerAssignedAccountID" => CustomerAssignedAccountIDType::class,
        "cbc:SupplierAssignedAccountID" => SupplierAssignedAccountIDType::class,
        "cbc:AdditionalAccountID" => AdditionalAccountIDType::class . "[]",
        "cac:Party" => PartyType::class,
        "cac:DeliveryContact" => ContactType::class,
        "cac:AccountingContact" => ContactType::class,
        "cac:BuyerContact" => ContactType::class,
    ];

    protected $minOccurs = [
    ];
}