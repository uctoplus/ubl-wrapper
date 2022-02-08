<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SalesOrderIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalTaxAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumBackorderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumBackorderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InspectionMethodCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PartialDeliveryIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BackOrderAllowedIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WarrantyInformationType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\OrderedShipmentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PricingReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AllowanceChargeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PriceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TaxTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PriceExtensionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LineReferenceType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getSalesOrderID()
 * @method self setSalesOrderID($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getLineStatusCode()
 * @method self setLineStatusCode($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getLineExtensionAmount()
 * @method self setLineExtensionAmount($value)
 * @method mixed getTotalTaxAmount()
 * @method self setTotalTaxAmount($value)
 * @method mixed getMinimumQuantity()
 * @method self setMinimumQuantity($value)
 * @method mixed getMaximumQuantity()
 * @method self setMaximumQuantity($value)
 * @method mixed getMinimumBackorderQuantity()
 * @method self setMinimumBackorderQuantity($value)
 * @method mixed getMaximumBackorderQuantity()
 * @method self setMaximumBackorderQuantity($value)
 * @method mixed getInspectionMethodCode()
 * @method self setInspectionMethodCode($value)
 * @method mixed getPartialDeliveryIndicator()
 * @method self setPartialDeliveryIndicator($value)
 * @method mixed getBackOrderAllowedIndicator()
 * @method self setBackOrderAllowedIndicator($value)
 * @method mixed getAccountingCostCode()
 * @method self setAccountingCostCode($value)
 * @method mixed getAccountingCost()
 * @method self setAccountingCost($value)
 * @method mixed getWarrantyInformation()
 * @method self setWarrantyInformation($value)
 * @method mixed getDelivery()
 * @method self setDelivery($value)
 * @method mixed getDeliveryTerms()
 * @method self setDeliveryTerms($value)
 * @method mixed getOriginatorParty()
 * @method self setOriginatorParty($value)
 * @method mixed getOrderedShipment()
 * @method self setOrderedShipment($value)
 * @method mixed getPricingReference()
 * @method self setPricingReference($value)
 * @method mixed getAllowanceCharge()
 * @method self setAllowanceCharge($value)
 * @method mixed getPrice()
 * @method self setPrice($value)
 * @method mixed getItem()
 * @method self setItem($value)
 * @method mixed getSubLineItem()
 * @method self setSubLineItem($value)
 * @method mixed getWarrantyValidityPeriod()
 * @method self setWarrantyValidityPeriod($value)
 * @method mixed getWarrantyParty()
 * @method self setWarrantyParty($value)
 * @method mixed getTaxTotal()
 * @method self setTaxTotal($value)
 * @method mixed getItemPriceExtension()
 * @method self setItemPriceExtension($value)
 * @method mixed getLineReference()
 * @method self setLineReference($value)
 */
class LineItemType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:SalesOrderID" => SalesOrderIDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:LineStatusCode" => LineStatusCodeType::class,
        "cbc:Quantity" => QuantityType::class,
        "cbc:LineExtensionAmount" => LineExtensionAmountType::class,
        "cbc:TotalTaxAmount" => TotalTaxAmountType::class,
        "cbc:MinimumQuantity" => MinimumQuantityType::class,
        "cbc:MaximumQuantity" => MaximumQuantityType::class,
        "cbc:MinimumBackorderQuantity" => MinimumBackorderQuantityType::class,
        "cbc:MaximumBackorderQuantity" => MaximumBackorderQuantityType::class,
        "cbc:InspectionMethodCode" => InspectionMethodCodeType::class,
        "cbc:PartialDeliveryIndicator" => PartialDeliveryIndicatorType::class,
        "cbc:BackOrderAllowedIndicator" => BackOrderAllowedIndicatorType::class,
        "cbc:AccountingCostCode" => AccountingCostCodeType::class,
        "cbc:AccountingCost" => AccountingCostType::class,
        "cbc:WarrantyInformation" => WarrantyInformationType::class . "[]",
        "cac:Delivery" => DeliveryType::class . "[]",
        "cac:DeliveryTerms" => DeliveryTermsType::class,
        "cac:OriginatorParty" => PartyType::class,
        "cac:OrderedShipment" => OrderedShipmentType::class . "[]",
        "cac:PricingReference" => PricingReferenceType::class,
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:Price" => PriceType::class,
        "cac:Item" => ItemType::class,
        "cac:SubLineItem" => LineItemType::class . "[]",
        "cac:WarrantyValidityPeriod" => PeriodType::class,
        "cac:WarrantyParty" => PartyType::class,
        "cac:TaxTotal" => TaxTotalType::class . "[]",
        "cac:ItemPriceExtension" => PriceExtensionType::class,
        "cac:LineReference" => LineReferenceType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cac:Item" => 1,
    ];
}