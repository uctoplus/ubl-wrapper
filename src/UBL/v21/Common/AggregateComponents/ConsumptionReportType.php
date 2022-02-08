<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalConsumedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BasicConsumedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResidentOccupantsNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumersEnergyLevelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumersEnergyLevelType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResidenceTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResidenceTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HeatingTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HeatingTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ConsumptionReportReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ConsumptionHistoryType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getConsumptionType()
 * @method self setConsumptionType($value)
 * @method mixed getConsumptionTypeCode()
 * @method self setConsumptionTypeCode($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getTotalConsumedQuantity()
 * @method self setTotalConsumedQuantity($value)
 * @method mixed getBasicConsumedQuantity()
 * @method self setBasicConsumedQuantity($value)
 * @method mixed getResidentOccupantsNumeric()
 * @method self setResidentOccupantsNumeric($value)
 * @method mixed getConsumersEnergyLevelCode()
 * @method self setConsumersEnergyLevelCode($value)
 * @method mixed getConsumersEnergyLevel()
 * @method self setConsumersEnergyLevel($value)
 * @method mixed getResidenceType()
 * @method self setResidenceType($value)
 * @method mixed getResidenceTypeCode()
 * @method self setResidenceTypeCode($value)
 * @method mixed getHeatingType()
 * @method self setHeatingType($value)
 * @method mixed getHeatingTypeCode()
 * @method self setHeatingTypeCode($value)
 * @method mixed getPeriod()
 * @method self setPeriod($value)
 * @method mixed getGuidanceDocumentReference()
 * @method self setGuidanceDocumentReference($value)
 * @method mixed getDocumentReference()
 * @method self setDocumentReference($value)
 * @method mixed getConsumptionReportReference()
 * @method self setConsumptionReportReference($value)
 * @method mixed getConsumptionHistory()
 * @method self setConsumptionHistory($value)
 */
class ConsumptionReportType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:ConsumptionType" => ConsumptionTypeType::class,
        "cbc:ConsumptionTypeCode" => ConsumptionTypeCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:TotalConsumedQuantity" => TotalConsumedQuantityType::class,
        "cbc:BasicConsumedQuantity" => BasicConsumedQuantityType::class,
        "cbc:ResidentOccupantsNumeric" => ResidentOccupantsNumericType::class,
        "cbc:ConsumersEnergyLevelCode" => ConsumersEnergyLevelCodeType::class,
        "cbc:ConsumersEnergyLevel" => ConsumersEnergyLevelType::class,
        "cbc:ResidenceType" => ResidenceTypeType::class,
        "cbc:ResidenceTypeCode" => ResidenceTypeCodeType::class,
        "cbc:HeatingType" => HeatingTypeType::class,
        "cbc:HeatingTypeCode" => HeatingTypeCodeType::class,
        "cac:Period" => PeriodType::class,
        "cac:GuidanceDocumentReference" => DocumentReferenceType::class,
        "cac:DocumentReference" => DocumentReferenceType::class,
        "cac:ConsumptionReportReference" => ConsumptionReportReferenceType::class . "[]",
        "cac:ConsumptionHistory" => ConsumptionHistoryType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}