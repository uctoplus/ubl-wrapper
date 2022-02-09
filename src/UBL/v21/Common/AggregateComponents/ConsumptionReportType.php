<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BasicConsumedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumersEnergyLevelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumersEnergyLevelType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HeatingTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HeatingTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResidenceTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResidenceTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResidentOccupantsNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalConsumedQuantityType;

/**
 * Class ConsumptionReportType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method ConsumptionTypeType getConsumptionType()
 * @method self setConsumptionType(ConsumptionTypeType|string $value)
 * @method ConsumptionTypeCodeType getConsumptionTypeCode()
 * @method self setConsumptionTypeCode(ConsumptionTypeCodeType|string $value)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method TotalConsumedQuantityType getTotalConsumedQuantity()
 * @method self setTotalConsumedQuantity(TotalConsumedQuantityType|string $value)
 * @method BasicConsumedQuantityType getBasicConsumedQuantity()
 * @method self setBasicConsumedQuantity(BasicConsumedQuantityType|string $value)
 * @method ResidentOccupantsNumericType getResidentOccupantsNumeric()
 * @method self setResidentOccupantsNumeric(ResidentOccupantsNumericType|string $value)
 * @method ConsumersEnergyLevelCodeType getConsumersEnergyLevelCode()
 * @method self setConsumersEnergyLevelCode(ConsumersEnergyLevelCodeType|string $value)
 * @method ConsumersEnergyLevelType getConsumersEnergyLevel()
 * @method self setConsumersEnergyLevel(ConsumersEnergyLevelType|string $value)
 * @method ResidenceTypeType getResidenceType()
 * @method self setResidenceType(ResidenceTypeType|string $value)
 * @method ResidenceTypeCodeType getResidenceTypeCode()
 * @method self setResidenceTypeCode(ResidenceTypeCodeType|string $value)
 * @method HeatingTypeType getHeatingType()
 * @method self setHeatingType(HeatingTypeType|string $value)
 * @method HeatingTypeCodeType getHeatingTypeCode()
 * @method self setHeatingTypeCode(HeatingTypeCodeType|string $value)
 * @method PeriodType getPeriod()
 * @method self setPeriod(PeriodType $value)
 * @method DocumentReferenceType getGuidanceDocumentReference()
 * @method self setGuidanceDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType getDocumentReference()
 * @method self setDocumentReference(DocumentReferenceType $value)
 * @method ConsumptionReportReferenceType getConsumptionReportReference()
 * @method self addConsumptionReportReference(ConsumptionReportReferenceType $value)
 * @method self setConsumptionReportReference(ConsumptionReportReferenceType ...$values)
 * @method ConsumptionHistoryType getConsumptionHistory()
 * @method self addConsumptionHistory(ConsumptionHistoryType $value)
 * @method self setConsumptionHistory(ConsumptionHistoryType ...$values)
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