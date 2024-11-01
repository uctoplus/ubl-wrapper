<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ServiceTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ServiceTypeType;

/**
 * Class ServiceProviderPartyType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method ServiceTypeCodeType getServiceTypeCode()
 * @method self setServiceTypeCode(ServiceTypeCodeType|string $value)
 * @method ServiceTypeType[] getServiceType()
 * @method self addServiceType(ServiceTypeType|string $value)
 * @method self setServiceType(ServiceTypeType ...$values)
 * @method PartyType getParty()
 * @method self setParty(PartyType $value)
 * @method ContactType getSellerContact()
 * @method self setSellerContact(ContactType $value)
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