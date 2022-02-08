<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AdditionalAccountIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomerAssignedAccountIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DataSendingCapabilityType;

/**
 * Class SupplierPartyType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getCustomerAssignedAccountID()
 * @method self setCustomerAssignedAccountID($value)
 * @method mixed getAdditionalAccountID()
 * @method self addAdditionalAccountID($value)
 * @method self setAdditionalAccountID($value)
 * @method mixed getDataSendingCapability()
 * @method self setDataSendingCapability($value)
 * @method mixed getParty()
 * @method self setParty($value)
 * @method mixed getDespatchContact()
 * @method self setDespatchContact($value)
 * @method mixed getAccountingContact()
 * @method self setAccountingContact($value)
 * @method mixed getSellerContact()
 * @method self setSellerContact($value)
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