<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BackOrderAllowedIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InspectionMethodCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumBackorderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumBackorderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PartialDeliveryIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SalesOrderIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalTaxAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WarrantyInformationType;

/**
 * Class LineItemType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method SalesOrderIDType getSalesOrderID()
 * @method self setSalesOrderID(SalesOrderIDType|string $value)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method LineStatusCodeType getLineStatusCode()
 * @method self setLineStatusCode(LineStatusCodeType|string $value)
 * @method QuantityType getQuantity()
 * @method self setQuantity(QuantityType|string $value)
 * @method LineExtensionAmountType getLineExtensionAmount()
 * @method self setLineExtensionAmount(LineExtensionAmountType|string $value)
 * @method TotalTaxAmountType getTotalTaxAmount()
 * @method self setTotalTaxAmount(TotalTaxAmountType|string $value)
 * @method MinimumQuantityType getMinimumQuantity()
 * @method self setMinimumQuantity(MinimumQuantityType|string $value)
 * @method MaximumQuantityType getMaximumQuantity()
 * @method self setMaximumQuantity(MaximumQuantityType|string $value)
 * @method MinimumBackorderQuantityType getMinimumBackorderQuantity()
 * @method self setMinimumBackorderQuantity(MinimumBackorderQuantityType|string $value)
 * @method MaximumBackorderQuantityType getMaximumBackorderQuantity()
 * @method self setMaximumBackorderQuantity(MaximumBackorderQuantityType|string $value)
 * @method InspectionMethodCodeType getInspectionMethodCode()
 * @method self setInspectionMethodCode(InspectionMethodCodeType|string $value)
 * @method PartialDeliveryIndicatorType getPartialDeliveryIndicator()
 * @method self setPartialDeliveryIndicator(PartialDeliveryIndicatorType|string $value)
 * @method BackOrderAllowedIndicatorType getBackOrderAllowedIndicator()
 * @method self setBackOrderAllowedIndicator(BackOrderAllowedIndicatorType|string $value)
 * @method AccountingCostCodeType getAccountingCostCode()
 * @method self setAccountingCostCode(AccountingCostCodeType|string $value)
 * @method AccountingCostType getAccountingCost()
 * @method self setAccountingCost(AccountingCostType|string $value)
 * @method WarrantyInformationType getWarrantyInformation()
 * @method self addWarrantyInformation(WarrantyInformationType|string $value)
 * @method self setWarrantyInformation(WarrantyInformationType ...$values)
 * @method DeliveryType getDelivery()
 * @method self addDelivery(DeliveryType $value)
 * @method self setDelivery(DeliveryType ...$values)
 * @method DeliveryTermsType getDeliveryTerms()
 * @method self setDeliveryTerms(DeliveryTermsType $value)
 * @method PartyType getOriginatorParty()
 * @method self setOriginatorParty(PartyType $value)
 * @method OrderedShipmentType getOrderedShipment()
 * @method self addOrderedShipment(OrderedShipmentType $value)
 * @method self setOrderedShipment(OrderedShipmentType ...$values)
 * @method PricingReferenceType getPricingReference()
 * @method self setPricingReference(PricingReferenceType $value)
 * @method AllowanceChargeType getAllowanceCharge()
 * @method self addAllowanceCharge(AllowanceChargeType $value)
 * @method self setAllowanceCharge(AllowanceChargeType ...$values)
 * @method PriceType getPrice()
 * @method self setPrice(PriceType $value)
 * @method ItemType getItem()
 * @method self setItem(ItemType $value)
 * @method LineItemType getSubLineItem()
 * @method self addSubLineItem(LineItemType $value)
 * @method self setSubLineItem(LineItemType ...$values)
 * @method PeriodType getWarrantyValidityPeriod()
 * @method self setWarrantyValidityPeriod(PeriodType $value)
 * @method PartyType getWarrantyParty()
 * @method self setWarrantyParty(PartyType $value)
 * @method TaxTotalType getTaxTotal()
 * @method self addTaxTotal(TaxTotalType $value)
 * @method self setTaxTotal(TaxTotalType ...$values)
 * @method PriceExtensionType getItemPriceExtension()
 * @method self setItemPriceExtension(PriceExtensionType $value)
 * @method LineReferenceType getLineReference()
 * @method self addLineReference(LineReferenceType $value)
 * @method self setLineReference(LineReferenceType ...$values)
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