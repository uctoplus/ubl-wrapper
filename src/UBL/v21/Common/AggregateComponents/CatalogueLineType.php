<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LifeCycleStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContractSubdivisionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrderableIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrderableUnitType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContentUnitQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrderQuantityIncrementNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumOrderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumOrderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WarrantyInformationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PackLevelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CustomerPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SupplierPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemComparisonType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\RelatedItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemLocationQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemPropertyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LineReferenceType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getActionCode()
 * @method self setActionCode($value)
 * @method mixed getLifeCycleStatusCode()
 * @method self setLifeCycleStatusCode($value)
 * @method mixed getContractSubdivision()
 * @method self setContractSubdivision($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getOrderableIndicator()
 * @method self setOrderableIndicator($value)
 * @method mixed getOrderableUnit()
 * @method self setOrderableUnit($value)
 * @method mixed getContentUnitQuantity()
 * @method self setContentUnitQuantity($value)
 * @method mixed getOrderQuantityIncrementNumeric()
 * @method self setOrderQuantityIncrementNumeric($value)
 * @method mixed getMinimumOrderQuantity()
 * @method self setMinimumOrderQuantity($value)
 * @method mixed getMaximumOrderQuantity()
 * @method self setMaximumOrderQuantity($value)
 * @method mixed getWarrantyInformation()
 * @method self setWarrantyInformation($value)
 * @method mixed getPackLevelCode()
 * @method self setPackLevelCode($value)
 * @method mixed getContractorCustomerParty()
 * @method self setContractorCustomerParty($value)
 * @method mixed getSellerSupplierParty()
 * @method self setSellerSupplierParty($value)
 * @method mixed getWarrantyParty()
 * @method self setWarrantyParty($value)
 * @method mixed getWarrantyValidityPeriod()
 * @method self setWarrantyValidityPeriod($value)
 * @method mixed getLineValidityPeriod()
 * @method self setLineValidityPeriod($value)
 * @method mixed getItemComparison()
 * @method self setItemComparison($value)
 * @method mixed getComponentRelatedItem()
 * @method self setComponentRelatedItem($value)
 * @method mixed getAccessoryRelatedItem()
 * @method self setAccessoryRelatedItem($value)
 * @method mixed getRequiredRelatedItem()
 * @method self setRequiredRelatedItem($value)
 * @method mixed getReplacementRelatedItem()
 * @method self setReplacementRelatedItem($value)
 * @method mixed getComplementaryRelatedItem()
 * @method self setComplementaryRelatedItem($value)
 * @method mixed getReplacedRelatedItem()
 * @method self setReplacedRelatedItem($value)
 * @method mixed getRequiredItemLocationQuantity()
 * @method self setRequiredItemLocationQuantity($value)
 * @method mixed getDocumentReference()
 * @method self setDocumentReference($value)
 * @method mixed getItem()
 * @method self setItem($value)
 * @method mixed getKeywordItemProperty()
 * @method self setKeywordItemProperty($value)
 * @method mixed getCallForTendersLineReference()
 * @method self setCallForTendersLineReference($value)
 * @method mixed getCallForTendersDocumentReference()
 * @method self setCallForTendersDocumentReference($value)
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