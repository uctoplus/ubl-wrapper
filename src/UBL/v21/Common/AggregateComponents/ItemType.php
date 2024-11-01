<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AdditionalInformationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BrandNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CatalogueIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HazardousRiskIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\KeywordType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ModelNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PackQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PackSizeNumericType;

/**
 * Class ItemType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method PackQuantityType getPackQuantity()
 * @method self setPackQuantity(PackQuantityType|string $value)
 * @method PackSizeNumericType getPackSizeNumeric()
 * @method self setPackSizeNumeric(PackSizeNumericType|string $value)
 * @method CatalogueIndicatorType getCatalogueIndicator()
 * @method self setCatalogueIndicator(CatalogueIndicatorType|string $value)
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method HazardousRiskIndicatorType getHazardousRiskIndicator()
 * @method self setHazardousRiskIndicator(HazardousRiskIndicatorType|string $value)
 * @method AdditionalInformationType[] getAdditionalInformation()
 * @method self addAdditionalInformation(AdditionalInformationType|string $value)
 * @method self setAdditionalInformation(AdditionalInformationType ...$values)
 * @method KeywordType[] getKeyword()
 * @method self addKeyword(KeywordType|string $value)
 * @method self setKeyword(KeywordType ...$values)
 * @method BrandNameType[] getBrandName()
 * @method self addBrandName(BrandNameType|string $value)
 * @method self setBrandName(BrandNameType ...$values)
 * @method ModelNameType[] getModelName()
 * @method self addModelName(ModelNameType|string $value)
 * @method self setModelName(ModelNameType ...$values)
 * @method ItemIdentificationType getBuyersItemIdentification()
 * @method self setBuyersItemIdentification(ItemIdentificationType $value)
 * @method ItemIdentificationType getSellersItemIdentification()
 * @method self setSellersItemIdentification(ItemIdentificationType $value)
 * @method ItemIdentificationType[] getManufacturersItemIdentification()
 * @method self addManufacturersItemIdentification(ItemIdentificationType $value)
 * @method self setManufacturersItemIdentification(ItemIdentificationType ...$values)
 * @method ItemIdentificationType getStandardItemIdentification()
 * @method self setStandardItemIdentification(ItemIdentificationType $value)
 * @method ItemIdentificationType getCatalogueItemIdentification()
 * @method self setCatalogueItemIdentification(ItemIdentificationType $value)
 * @method ItemIdentificationType[] getAdditionalItemIdentification()
 * @method self addAdditionalItemIdentification(ItemIdentificationType $value)
 * @method self setAdditionalItemIdentification(ItemIdentificationType ...$values)
 * @method DocumentReferenceType getCatalogueDocumentReference()
 * @method self setCatalogueDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType[] getItemSpecificationDocumentReference()
 * @method self addItemSpecificationDocumentReference(DocumentReferenceType $value)
 * @method self setItemSpecificationDocumentReference(DocumentReferenceType ...$values)
 * @method CountryType getOriginCountry()
 * @method self setOriginCountry(CountryType $value)
 * @method CommodityClassificationType[] getCommodityClassification()
 * @method self addCommodityClassification(CommodityClassificationType $value)
 * @method self setCommodityClassification(CommodityClassificationType ...$values)
 * @method TransactionConditionsType[] getTransactionConditions()
 * @method self addTransactionConditions(TransactionConditionsType $value)
 * @method self setTransactionConditions(TransactionConditionsType ...$values)
 * @method HazardousItemType[] getHazardousItem()
 * @method self addHazardousItem(HazardousItemType $value)
 * @method self setHazardousItem(HazardousItemType ...$values)
 * @method TaxCategoryType[] getClassifiedTaxCategory()
 * @method self addClassifiedTaxCategory(TaxCategoryType $value)
 * @method self setClassifiedTaxCategory(TaxCategoryType ...$values)
 * @method ItemPropertyType[] getAdditionalItemProperty()
 * @method self addAdditionalItemProperty(ItemPropertyType $value)
 * @method self setAdditionalItemProperty(ItemPropertyType ...$values)
 * @method PartyType[] getManufacturerParty()
 * @method self addManufacturerParty(PartyType $value)
 * @method self setManufacturerParty(PartyType ...$values)
 * @method PartyType getInformationContentProviderParty()
 * @method self setInformationContentProviderParty(PartyType $value)
 * @method AddressType[] getOriginAddress()
 * @method self addOriginAddress(AddressType $value)
 * @method self setOriginAddress(AddressType ...$values)
 * @method ItemInstanceType[] getItemInstance()
 * @method self addItemInstance(ItemInstanceType $value)
 * @method self setItemInstance(ItemInstanceType ...$values)
 * @method CertificateType[] getCertificate()
 * @method self addCertificate(CertificateType $value)
 * @method self setCertificate(CertificateType ...$values)
 * @method DimensionType[] getDimension()
 * @method self addDimension(DimensionType $value)
 * @method self setDimension(DimensionType ...$values)
 */
class ItemType extends AggregateComponent
{
    protected $casts = [
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:PackQuantity" => PackQuantityType::class,
        "cbc:PackSizeNumeric" => PackSizeNumericType::class,
        "cbc:CatalogueIndicator" => CatalogueIndicatorType::class,
        "cbc:Name" => NameType::class,
        "cbc:HazardousRiskIndicator" => HazardousRiskIndicatorType::class,
        "cbc:AdditionalInformation" => AdditionalInformationType::class . "[]",
        "cbc:Keyword" => KeywordType::class . "[]",
        "cbc:BrandName" => BrandNameType::class . "[]",
        "cbc:ModelName" => ModelNameType::class . "[]",
        "cac:BuyersItemIdentification" => ItemIdentificationType::class,
        "cac:SellersItemIdentification" => ItemIdentificationType::class,
        "cac:ManufacturersItemIdentification" => ItemIdentificationType::class . "[]",
        "cac:StandardItemIdentification" => ItemIdentificationType::class,
        "cac:CatalogueItemIdentification" => ItemIdentificationType::class,
        "cac:AdditionalItemIdentification" => ItemIdentificationType::class . "[]",
        "cac:CatalogueDocumentReference" => DocumentReferenceType::class,
        "cac:ItemSpecificationDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:OriginCountry" => CountryType::class,
        "cac:CommodityClassification" => CommodityClassificationType::class . "[]",
        "cac:TransactionConditions" => TransactionConditionsType::class . "[]",
        "cac:HazardousItem" => HazardousItemType::class . "[]",
        "cac:ClassifiedTaxCategory" => TaxCategoryType::class . "[]",
        "cac:AdditionalItemProperty" => ItemPropertyType::class . "[]",
        "cac:ManufacturerParty" => PartyType::class . "[]",
        "cac:InformationContentProviderParty" => PartyType::class,
        "cac:OriginAddress" => AddressType::class . "[]",
        "cac:ItemInstance" => ItemInstanceType::class . "[]",
        "cac:Certificate" => CertificateType::class . "[]",
        "cac:Dimension" => DimensionType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}