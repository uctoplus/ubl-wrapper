<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ServiceTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ServiceTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ContactType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getServiceTypeCode()
 * @method self setServiceTypeCode($value)
 * @method mixed getServiceType()
 * @method self setServiceType($value)
 * @method mixed getParty()
 * @method self setParty($value)
 * @method mixed getSellerContact()
 * @method self setSellerContact($value)
 */
class ServiceProviderPartyType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:ServiceTypeCode" => ServiceTypeCodeType::class,
        "cbc:ServiceType" => ServiceTypeType::class . "[]",
        "cac:Party" => PartyType::class,
        "cac:SellerContact" => ContactType::class,
    ];

    protected $minOccurs = [
        "cac:Party" => 1,
    ];
}