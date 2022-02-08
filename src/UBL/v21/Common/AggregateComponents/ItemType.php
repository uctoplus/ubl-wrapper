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
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getPackQuantity()
 * @method self setPackQuantity($value)
 * @method mixed getPackSizeNumeric()
 * @method self setPackSizeNumeric($value)
 * @method mixed getCatalogueIndicator()
 * @method self setCatalogueIndicator($value)
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getHazardousRiskIndicator()
 * @method self setHazardousRiskIndicator($value)
 * @method mixed getAdditionalInformation()
 * @method self addAdditionalInformation($value)
 * @method self setAdditionalInformation($value)
 * @method mixed getKeyword()
 * @method self addKeyword($value)
 * @method self setKeyword($value)
 * @method mixed getBrandName()
 * @method self addBrandName($value)
 * @method self setBrandName($value)
 * @method mixed getModelName()
 * @method self addModelName($value)
 * @method self setModelName($value)
 * @method mixed getBuyersItemIdentification()
 * @method self setBuyersItemIdentification($value)
 * @method mixed getSellersItemIdentification()
 * @method self setSellersItemIdentification($value)
 * @method mixed getManufacturersItemIdentification()
 * @method self addManufacturersItemIdentification($value)
 * @method self setManufacturersItemIdentification($value)
 * @method mixed getStandardItemIdentification()
 * @method self setStandardItemIdentification($value)
 * @method mixed getCatalogueItemIdentification()
 * @method self setCatalogueItemIdentification($value)
 * @method mixed getAdditionalItemIdentification()
 * @method self addAdditionalItemIdentification($value)
 * @method self setAdditionalItemIdentification($value)
 * @method mixed getCatalogueDocumentReference()
 * @method self setCatalogueDocumentReference($value)
 * @method mixed getItemSpecificationDocumentReference()
 * @method self addItemSpecificationDocumentReference($value)
 * @method self setItemSpecificationDocumentReference($value)
 * @method mixed getOriginCountry()
 * @method self setOriginCountry($value)
 * @method mixed getCommodityClassification()
 * @method self addCommodityClassification($value)
 * @method self setCommodityClassification($value)
 * @method mixed getTransactionConditions()
 * @method self addTransactionConditions($value)
 * @method self setTransactionConditions($value)
 * @method mixed getHazardousItem()
 * @method self addHazardousItem($value)
 * @method self setHazardousItem($value)
 * @method mixed getClassifiedTaxCategory()
 * @method self addClassifiedTaxCategory($value)
 * @method self setClassifiedTaxCategory($value)
 * @method mixed getAdditionalItemProperty()
 * @method self addAdditionalItemProperty($value)
 * @method self setAdditionalItemProperty($value)
 * @method mixed getManufacturerParty()
 * @method self addManufacturerParty($value)
 * @method self setManufacturerParty($value)
 * @method mixed getInformationContentProviderParty()
 * @method self setInformationContentProviderParty($value)
 * @method mixed getOriginAddress()
 * @method self addOriginAddress($value)
 * @method self setOriginAddress($value)
 * @method mixed getItemInstance()
 * @method self addItemInstance($value)
 * @method self setItemInstance($value)
 * @method mixed getCertificate()
 * @method self addCertificate($value)
 * @method self setCertificate($value)
 * @method mixed getDimension()
 * @method self addDimension($value)
 * @method self setDimension($value)
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