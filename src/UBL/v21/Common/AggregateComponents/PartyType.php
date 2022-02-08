<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EndpointIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IndustryClassificationCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LogoReferenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MarkAttentionIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MarkCareIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WebsiteURIType;

/**
 * Class PartyType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getMarkCareIndicator()
 * @method self setMarkCareIndicator($value)
 * @method mixed getMarkAttentionIndicator()
 * @method self setMarkAttentionIndicator($value)
 * @method mixed getWebsiteURI()
 * @method self setWebsiteURI($value)
 * @method mixed getLogoReferenceID()
 * @method self setLogoReferenceID($value)
 * @method mixed getEndpointID()
 * @method self setEndpointID($value)
 * @method mixed getIndustryClassificationCode()
 * @method self setIndustryClassificationCode($value)
 * @method mixed getPartyIdentification()
 * @method self addPartyIdentification($value)
 * @method self setPartyIdentification($value)
 * @method mixed getPartyName()
 * @method self addPartyName($value)
 * @method self setPartyName($value)
 * @method mixed getLanguage()
 * @method self setLanguage($value)
 * @method mixed getPostalAddress()
 * @method self setPostalAddress($value)
 * @method mixed getPhysicalLocation()
 * @method self setPhysicalLocation($value)
 * @method mixed getPartyTaxScheme()
 * @method self addPartyTaxScheme($value)
 * @method self setPartyTaxScheme($value)
 * @method mixed getPartyLegalEntity()
 * @method self addPartyLegalEntity($value)
 * @method self setPartyLegalEntity($value)
 * @method mixed getContact()
 * @method self setContact($value)
 * @method mixed getPerson()
 * @method self addPerson($value)
 * @method self setPerson($value)
 * @method mixed getAgentParty()
 * @method self setAgentParty($value)
 * @method mixed getServiceProviderParty()
 * @method self addServiceProviderParty($value)
 * @method self setServiceProviderParty($value)
 * @method mixed getPowerOfAttorney()
 * @method self addPowerOfAttorney($value)
 * @method self setPowerOfAttorney($value)
 * @method mixed getFinancialAccount()
 * @method self setFinancialAccount($value)
 */
class PartyType extends AggregateComponent
{
    protected $casts = [
        "cbc:MarkCareIndicator" => MarkCareIndicatorType::class,
        "cbc:MarkAttentionIndicator" => MarkAttentionIndicatorType::class,
        "cbc:WebsiteURI" => WebsiteURIType::class,
        "cbc:LogoReferenceID" => LogoReferenceIDType::class,
        "cbc:EndpointID" => EndpointIDType::class,
        "cbc:IndustryClassificationCode" => IndustryClassificationCodeType::class,
        "cac:PartyIdentification" => PartyIdentificationType::class . "[]",
        "cac:PartyName" => PartyNameType::class . "[]",
        "cac:Language" => LanguageType::class,
        "cac:PostalAddress" => AddressType::class,
        "cac:PhysicalLocation" => LocationType::class,
        "cac:PartyTaxScheme" => PartyTaxSchemeType::class . "[]",
        "cac:PartyLegalEntity" => PartyLegalEntityType::class . "[]",
        "cac:Contact" => ContactType::class,
        "cac:Person" => PersonType::class . "[]",
        "cac:AgentParty" => PartyType::class,
        "cac:ServiceProviderParty" => ServiceProviderPartyType::class . "[]",
        "cac:PowerOfAttorney" => PowerOfAttorneyType::class . "[]",
        "cac:FinancialAccount" => FinancialAccountType::class,
    ];

    protected $minOccurs = [
    ];
}