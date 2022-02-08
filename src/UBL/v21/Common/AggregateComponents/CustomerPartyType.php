<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomerAssignedAccountIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SupplierAssignedAccountIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AdditionalAccountIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ContactType;

/**
 *
 * @method mixed getCustomerAssignedAccountID()
 * @method self setCustomerAssignedAccountID($value)
 * @method mixed getSupplierAssignedAccountID()
 * @method self setSupplierAssignedAccountID($value)
 * @method mixed getAdditionalAccountID()
 * @method self setAdditionalAccountID($value)
 * @method mixed getParty()
 * @method self setParty($value)
 * @method mixed getDeliveryContact()
 * @method self setDeliveryContact($value)
 * @method mixed getAccountingContact()
 * @method self setAccountingContact($value)
 * @method mixed getBuyerContact()
 * @method self setBuyerContact($value)
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