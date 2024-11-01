<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AdditionalAccountIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomerAssignedAccountIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DataSendingCapabilityType;

/**
 * Class SupplierPartyType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method CustomerAssignedAccountIDType getCustomerAssignedAccountID()
 * @method self setCustomerAssignedAccountID(CustomerAssignedAccountIDType|string $value)
 * @method AdditionalAccountIDType[] getAdditionalAccountID()
 * @method self addAdditionalAccountID(AdditionalAccountIDType|string $value)
 * @method self setAdditionalAccountID(AdditionalAccountIDType ...$values)
 * @method DataSendingCapabilityType getDataSendingCapability()
 * @method self setDataSendingCapability(DataSendingCapabilityType|string $value)
 * @method PartyType getParty()
 * @method self setParty(PartyType $value)
 * @method ContactType getDespatchContact()
 * @method self setDespatchContact(ContactType $value)
 * @method ContactType getAccountingContact()
 * @method self setAccountingContact(ContactType $value)
 * @method ContactType getSellerContact()
 * @method self setSellerContact(ContactType $value)
 */
class SupplierPartyType extends AggregateComponent
{
    protected $casts = [
        "cbc:CustomerAssignedAccountID" => CustomerAssignedAccountIDType::class,
        "cbc:AdditionalAccountID" => AdditionalAccountIDType::class . "[]",
        "cbc:DataSendingCapability" => DataSendingCapabilityType::class,
        "cac:Party" => PartyType::class,
        "cac:DespatchContact" => ContactType::class,
        "cac:AccountingContact" => ContactType::class,
        "cac:SellerContact" => ContactType::class,
    ];

    protected $minOccurs = [
    ];
}