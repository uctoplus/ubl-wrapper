<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SpecificationTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalMeteredQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ConsumptionPointType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\OnAccountPaymentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ConsumptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SupplierConsumptionType;

/**
 *
 * @method mixed getConsumptionID()
 * @method self setConsumptionID($value)
 * @method mixed getSpecificationTypeCode()
 * @method self setSpecificationTypeCode($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getTotalMeteredQuantity()
 * @method self setTotalMeteredQuantity($value)
 * @method mixed getSubscriberParty()
 * @method self setSubscriberParty($value)
 * @method mixed getUtilityConsumptionPoint()
 * @method self setUtilityConsumptionPoint($value)
 * @method mixed getOnAccountPayment()
 * @method self setOnAccountPayment($value)
 * @method mixed getConsumption()
 * @method self setConsumption($value)
 * @method mixed getSupplierConsumption()
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