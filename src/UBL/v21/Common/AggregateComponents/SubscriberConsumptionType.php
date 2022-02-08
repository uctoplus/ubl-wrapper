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
 * @method mixed getConsumptionID()
 * @method self setConsumptionID($value)
 * @method mixed getSpecificationTypeCode()
 * @method self setSpecificationTypeCode($value)
 * @method mixed getNote()
 * @method self addNote($value)
 * @method self setNote($value)
 * @method mixed getTotalMeteredQuantity()
 * @method self setTotalMeteredQuantity($value)
 * @method mixed getSubscriberParty()
 * @method self setSubscriberParty($value)
 * @method mixed getUtilityConsumptionPoint()
 * @method self setUtilityConsumptionPoint($value)
 * @method mixed getOnAccountPayment()
 * @method self addOnAccountPayment($value)
 * @method self setOnAccountPayment($value)
 * @method mixed getConsumption()
 * @method self setConsumption($value)
 * @method mixed getSupplierConsumption()
 * @method self addSupplierConsumption($value)
 * @method self setSupplierConsumption($value)
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