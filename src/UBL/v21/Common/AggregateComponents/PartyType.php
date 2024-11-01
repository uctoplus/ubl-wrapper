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
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method MarkCareIndicatorType getMarkCareIndicator()
 * @method self setMarkCareIndicator(MarkCareIndicatorType|string $value)
 * @method MarkAttentionIndicatorType getMarkAttentionIndicator()
 * @method self setMarkAttentionIndicator(MarkAttentionIndicatorType|string $value)
 * @method WebsiteURIType getWebsiteURI()
 * @method self setWebsiteURI(WebsiteURIType|string $value)
 * @method LogoReferenceIDType getLogoReferenceID()
 * @method self setLogoReferenceID(LogoReferenceIDType|string $value)
 * @method EndpointIDType getEndpointID()
 * @method self setEndpointID(EndpointIDType|string $value)
 * @method IndustryClassificationCodeType getIndustryClassificationCode()
 * @method self setIndustryClassificationCode(IndustryClassificationCodeType|string $value)
 * @method PartyIdentificationType[] getPartyIdentification()
 * @method self addPartyIdentification(PartyIdentificationType $value)
 * @method self setPartyIdentification(PartyIdentificationType ...$values)
 * @method PartyNameType[] getPartyName()
 * @method self addPartyName(PartyNameType $value)
 * @method self setPartyName(PartyNameType ...$values)
 * @method LanguageType getLanguage()
 * @method self setLanguage(LanguageType $value)
 * @method AddressType getPostalAddress()
 * @method self setPostalAddress(AddressType $value)
 * @method LocationType getPhysicalLocation()
 * @method self setPhysicalLocation(LocationType $value)
 * @method PartyTaxSchemeType[] getPartyTaxScheme()
 * @method self addPartyTaxScheme(PartyTaxSchemeType $value)
 * @method self setPartyTaxScheme(PartyTaxSchemeType ...$values)
 * @method PartyLegalEntityType[] getPartyLegalEntity()
 * @method self addPartyLegalEntity(PartyLegalEntityType $value)
 * @method self setPartyLegalEntity(PartyLegalEntityType ...$values)
 * @method ContactType getContact()
 * @method self setContact(ContactType $value)
 * @method PersonType[] getPerson()
 * @method self addPerson(PersonType $value)
 * @method self setPerson(PersonType ...$values)
 * @method PartyType getAgentParty()
 * @method self setAgentParty(PartyType $value)
 * @method ServiceProviderPartyType[] getServiceProviderParty()
 * @method self addServiceProviderParty(ServiceProviderPartyType $value)
 * @method self setServiceProviderParty(ServiceProviderPartyType ...$values)
 * @method PowerOfAttorneyType[] getPowerOfAttorney()
 * @method self addPowerOfAttorney(PowerOfAttorneyType $value)
 * @method self setPowerOfAttorney(PowerOfAttorneyType ...$values)
 * @method FinancialAccountType getFinancialAccount()
 * @method self setFinancialAccount(FinancialAccountType $value)
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