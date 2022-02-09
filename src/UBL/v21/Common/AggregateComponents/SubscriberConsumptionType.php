<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SpecificationTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalMeteredQuantityType;

/**
 * Class SubscriberConsumptionType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ConsumptionIDType getConsumptionID()
 * @method self setConsumptionID(ConsumptionIDType|string $value)
 * @method SpecificationTypeCodeType getSpecificationTypeCode()
 * @method self setSpecificationTypeCode(SpecificationTypeCodeType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method TotalMeteredQuantityType getTotalMeteredQuantity()
 * @method self setTotalMeteredQuantity(TotalMeteredQuantityType|string $value)
 * @method PartyType getSubscriberParty()
 * @method self setSubscriberParty(PartyType $value)
 * @method ConsumptionPointType getUtilityConsumptionPoint()
 * @method self setUtilityConsumptionPoint(ConsumptionPointType $value)
 * @method OnAccountPaymentType getOnAccountPayment()
 * @method self addOnAccountPayment(OnAccountPaymentType $value)
 * @method self setOnAccountPayment(OnAccountPaymentType ...$values)
 * @method ConsumptionType getConsumption()
 * @method self setConsumption(ConsumptionType $value)
 * @method SupplierConsumptionType getSupplierConsumption()
 * @method self addSupplierConsumption(SupplierConsumptionType $value)
 * @method self setSupplierConsumption(SupplierConsumptionType ...$values)
 */
class SubscriberConsumptionType extends AggregateComponent
{
    protected $casts = [
        "cbc:ConsumptionID" => ConsumptionIDType::class,
        "cbc:SpecificationTypeCode" => SpecificationTypeCodeType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:TotalMeteredQuantity" => TotalMeteredQuantityType::class,
        "cac:SubscriberParty" => PartyType::class,
        "cac:UtilityConsumptionPoint" => ConsumptionPointType::class,
        "cac:OnAccountPayment" => OnAccountPaymentType::class . "[]",
        "cac:Consumption" => ConsumptionType::class,
        "cac:SupplierConsumption" => SupplierConsumptionType::class . "[]",
    ];

    protected $minOccurs = [
        "cac:UtilityConsumptionPoint" => 1,
    ];
}