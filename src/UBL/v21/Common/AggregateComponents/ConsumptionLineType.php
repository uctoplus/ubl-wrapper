<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InvoicedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ParentDocumentLineReferenceIDType;

/**
 * Class ConsumptionLineType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method ParentDocumentLineReferenceIDType getParentDocumentLineReferenceID()
 * @method self setParentDocumentLineReferenceID(ParentDocumentLineReferenceIDType|string $value)
 * @method InvoicedQuantityType getInvoicedQuantity()
 * @method self setInvoicedQuantity(InvoicedQuantityType|string $value)
 * @method LineExtensionAmountType getLineExtensionAmount()
 * @method self setLineExtensionAmount(LineExtensionAmountType|string $value)
 * @method PeriodType getPeriod()
 * @method self setPeriod(PeriodType $value)
 * @method DeliveryType[] getDelivery()
 * @method self addDelivery(DeliveryType $value)
 * @method self setDelivery(DeliveryType ...$values)
 * @method AllowanceChargeType[] getAllowanceCharge()
 * @method self addAllowanceCharge(AllowanceChargeType $value)
 * @method self setAllowanceCharge(AllowanceChargeType ...$values)
 * @method TaxTotalType[] getTaxTotal()
 * @method self addTaxTotal(TaxTotalType $value)
 * @method self setTaxTotal(TaxTotalType ...$values)
 * @method UtilityItemType getUtilityItem()
 * @method self setUtilityItem(UtilityItemType $value)
 * @method PriceType getPrice()
 * @method self setPrice(PriceType $value)
 * @method UnstructuredPriceType getUnstructuredPrice()
 * @method self setUnstructuredPrice(UnstructuredPriceType $value)
 */
class ConsumptionLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:ParentDocumentLineReferenceID" => ParentDocumentLineReferenceIDType::class,
        "cbc:InvoicedQuantity" => InvoicedQuantityType::class,
        "cbc:LineExtensionAmount" => LineExtensionAmountType::class,
        "cac:Period" => PeriodType::class,
        "cac:Delivery" => DeliveryType::class . "[]",
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:TaxTotal" => TaxTotalType::class . "[]",
        "cac:UtilityItem" => UtilityItemType::class,
        "cac:Price" => PriceType::class,
        "cac:UnstructuredPrice" => UnstructuredPriceType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:InvoicedQuantity" => 1,
        "cbc:LineExtensionAmount" => 1,
        "cac:UtilityItem" => 1,
    ];
}