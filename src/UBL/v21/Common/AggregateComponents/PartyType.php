<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MarkCareIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MarkAttentionIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WebsiteURIType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LogoReferenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EndpointIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IndustryClassificationCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyIdentificationType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LanguageType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AddressType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LocationType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyTaxSchemeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyLegalEntityType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ContactType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PersonType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ServiceProviderPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PowerOfAttorneyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\FinancialAccountType;

/**
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
 * @method self setPartyIdentification($value)
 * @method mixed getPartyName()
 * @method self setPartyName($value)
 * @method mixed getLanguage()
 * @method self setLanguage($value)
 * @method mixed getPostalAddress()
 * @method self setPostalAddress($value)
 * @method mixed getPhysicalLocation()
 * @method self setPhysicalLocation($value)
 * @method mixed getPartyTaxScheme()
 * @method self setPartyTaxScheme($value)
 * @method mixed getPartyLegalEntity()
 * @method self setPartyLegalEntity($value)
 * @method mixed getContact()
 * @method self setContact($value)
 * @method mixed getPerson()
 * @method self setPerson($value)
 * @method mixed getAgentParty()
 * @method self setAgentParty($value)
 * @method mixed getServiceProviderParty()
 * @method self setServiceProviderParty($value)
 * @method mixed getPowerOfAttorney()
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