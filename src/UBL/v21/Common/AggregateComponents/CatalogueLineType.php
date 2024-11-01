<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContentUnitQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContractSubdivisionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LifeCycleStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumOrderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumOrderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrderableIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrderableUnitType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrderQuantityIncrementNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PackLevelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WarrantyInformationType;

/**
 * Class CatalogueLineType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method ActionCodeType getActionCode()
 * @method self setActionCode(ActionCodeType|string $value)
 * @method LifeCycleStatusCodeType getLifeCycleStatusCode()
 * @method self setLifeCycleStatusCode(LifeCycleStatusCodeType|string $value)
 * @method ContractSubdivisionType getContractSubdivision()
 * @method self setContractSubdivision(ContractSubdivisionType|string $value)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method OrderableIndicatorType getOrderableIndicator()
 * @method self setOrderableIndicator(OrderableIndicatorType|string $value)
 * @method OrderableUnitType getOrderableUnit()
 * @method self setOrderableUnit(OrderableUnitType|string $value)
 * @method ContentUnitQuantityType getContentUnitQuantity()
 * @method self setContentUnitQuantity(ContentUnitQuantityType|string $value)
 * @method OrderQuantityIncrementNumericType getOrderQuantityIncrementNumeric()
 * @method self setOrderQuantityIncrementNumeric(OrderQuantityIncrementNumericType|string $value)
 * @method MinimumOrderQuantityType getMinimumOrderQuantity()
 * @method self setMinimumOrderQuantity(MinimumOrderQuantityType|string $value)
 * @method MaximumOrderQuantityType getMaximumOrderQuantity()
 * @method self setMaximumOrderQuantity(MaximumOrderQuantityType|string $value)
 * @method WarrantyInformationType[] getWarrantyInformation()
 * @method self addWarrantyInformation(WarrantyInformationType|string $value)
 * @method self setWarrantyInformation(WarrantyInformationType ...$values)
 * @method PackLevelCodeType getPackLevelCode()
 * @method self setPackLevelCode(PackLevelCodeType|string $value)
 * @method CustomerPartyType getContractorCustomerParty()
 * @method self setContractorCustomerParty(CustomerPartyType $value)
 * @method SupplierPartyType getSellerSupplierParty()
 * @method self setSellerSupplierParty(SupplierPartyType $value)
 * @method PartyType getWarrantyParty()
 * @method self setWarrantyParty(PartyType $value)
 * @method PeriodType getWarrantyValidityPeriod()
 * @method self setWarrantyValidityPeriod(PeriodType $value)
 * @method PeriodType getLineValidityPeriod()
 * @method self setLineValidityPeriod(PeriodType $value)
 * @method ItemComparisonType[] getItemComparison()
 * @method self addItemComparison(ItemComparisonType $value)
 * @method self setItemComparison(ItemComparisonType ...$values)
 * @method RelatedItemType[] getComponentRelatedItem()
 * @method self addComponentRelatedItem(RelatedItemType $value)
 * @method self setComponentRelatedItem(RelatedItemType ...$values)
 * @method RelatedItemType[] getAccessoryRelatedItem()
 * @method self addAccessoryRelatedItem(RelatedItemType $value)
 * @method self setAccessoryRelatedItem(RelatedItemType ...$values)
 * @method RelatedItemType[] getRequiredRelatedItem()
 * @method self addRequiredRelatedItem(RelatedItemType $value)
 * @method self setRequiredRelatedItem(RelatedItemType ...$values)
 * @method RelatedItemType[] getReplacementRelatedItem()
 * @method self addReplacementRelatedItem(RelatedItemType $value)
 * @method self setReplacementRelatedItem(RelatedItemType ...$values)
 * @method RelatedItemType[] getComplementaryRelatedItem()
 * @method self addComplementaryRelatedItem(RelatedItemType $value)
 * @method self setComplementaryRelatedItem(RelatedItemType ...$values)
 * @method RelatedItemType[] getReplacedRelatedItem()
 * @method self addReplacedRelatedItem(RelatedItemType $value)
 * @method self setReplacedRelatedItem(RelatedItemType ...$values)
 * @method ItemLocationQuantityType[] getRequiredItemLocationQuantity()
 * @method self addRequiredItemLocationQuantity(ItemLocationQuantityType $value)
 * @method self setRequiredItemLocationQuantity(ItemLocationQuantityType ...$values)
 * @method DocumentReferenceType[] getDocumentReference()
 * @method self addDocumentReference(DocumentReferenceType $value)
 * @method self setDocumentReference(DocumentReferenceType ...$values)
 * @method ItemType getItem()
 * @method self setItem(ItemType $value)
 * @method ItemPropertyType[] getKeywordItemProperty()
 * @method self addKeywordItemProperty(ItemPropertyType $value)
 * @method self setKeywordItemProperty(ItemPropertyType ...$values)
 * @method LineReferenceType getCallForTendersLineReference()
 * @method self setCallForTendersLineReference(LineReferenceType $value)
 * @method DocumentReferenceType getCallForTendersDocumentReference()
 * @method self setCallForTendersDocumentReference(DocumentReferenceType $value)
 */
class CatalogueLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:ActionCode" => ActionCodeType::class,
        "cbc:LifeCycleStatusCode" => LifeCycleStatusCodeType::class,
        "cbc:ContractSubdivision" => ContractSubdivisionType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:OrderableIndicator" => OrderableIndicatorType::class,
        "cbc:OrderableUnit" => OrderableUnitType::class,
        "cbc:ContentUnitQuantity" => ContentUnitQuantityType::class,
        "cbc:OrderQuantityIncrementNumeric" => OrderQuantityIncrementNumericType::class,
        "cbc:MinimumOrderQuantity" => MinimumOrderQuantityType::class,
        "cbc:MaximumOrderQuantity" => MaximumOrderQuantityType::class,
        "cbc:WarrantyInformation" => WarrantyInformationType::class . "[]",
        "cbc:PackLevelCode" => PackLevelCodeType::class,
        "cac:ContractorCustomerParty" => CustomerPartyType::class,
        "cac:SellerSupplierParty" => SupplierPartyType::class,
        "cac:WarrantyParty" => PartyType::class,
        "cac:WarrantyValidityPeriod" => PeriodType::class,
        "cac:LineValidityPeriod" => PeriodType::class,
        "cac:ItemComparison" => ItemComparisonType::class . "[]",
        "cac:ComponentRelatedItem" => RelatedItemType::class . "[]",
        "cac:AccessoryRelatedItem" => RelatedItemType::class . "[]",
        "cac:RequiredRelatedItem" => RelatedItemType::class . "[]",
        "cac:ReplacementRelatedItem" => RelatedItemType::class . "[]",
        "cac:ComplementaryRelatedItem" => RelatedItemType::class . "[]",
        "cac:ReplacedRelatedItem" => RelatedItemType::class . "[]",
        "cac:RequiredItemLocationQuantity" => ItemLocationQuantityType::class . "[]",
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:Item" => ItemType::class,
        "cac:KeywordItemProperty" => ItemPropertyType::class . "[]",
        "cac:CallForTendersLineReference" => LineReferenceType::class,
        "cac:CallForTendersDocumentReference" => DocumentReferenceType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cac:Item" => 1,
    ];
}