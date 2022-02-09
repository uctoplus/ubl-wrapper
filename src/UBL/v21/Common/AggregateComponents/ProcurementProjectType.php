<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EstimatedOverallContractQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FeeDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProcurementSubTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProcurementTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QualityControlCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequestedDeliveryDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequiredFeeAmountType;

/**
 * Class ProcurementProjectType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NameType getName()
 * @method self addName(NameType|string $value)
 * @method self setName(NameType ...$values)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method ProcurementTypeCodeType getProcurementTypeCode()
 * @method self setProcurementTypeCode(ProcurementTypeCodeType|string $value)
 * @method ProcurementSubTypeCodeType getProcurementSubTypeCode()
 * @method self setProcurementSubTypeCode(ProcurementSubTypeCodeType|string $value)
 * @method QualityControlCodeType getQualityControlCode()
 * @method self setQualityControlCode(QualityControlCodeType|string $value)
 * @method RequiredFeeAmountType getRequiredFeeAmount()
 * @method self setRequiredFeeAmount(RequiredFeeAmountType|string $value)
 * @method FeeDescriptionType getFeeDescription()
 * @method self addFeeDescription(FeeDescriptionType|string $value)
 * @method self setFeeDescription(FeeDescriptionType ...$values)
 * @method RequestedDeliveryDateType getRequestedDeliveryDate()
 * @method self setRequestedDeliveryDate(RequestedDeliveryDateType|string $value)
 * @method EstimatedOverallContractQuantityType getEstimatedOverallContractQuantity()
 * @method self setEstimatedOverallContractQuantity(EstimatedOverallContractQuantityType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method RequestedTenderTotalType getRequestedTenderTotal()
 * @method self setRequestedTenderTotal(RequestedTenderTotalType $value)
 * @method CommodityClassificationType getMainCommodityClassification()
 * @method self setMainCommodityClassification(CommodityClassificationType $value)
 * @method CommodityClassificationType getAdditionalCommodityClassification()
 * @method self addAdditionalCommodityClassification(CommodityClassificationType $value)
 * @method self setAdditionalCommodityClassification(CommodityClassificationType ...$values)
 * @method LocationType getRealizedLocation()
 * @method self addRealizedLocation(LocationType $value)
 * @method self setRealizedLocation(LocationType ...$values)
 * @method PeriodType getPlannedPeriod()
 * @method self setPlannedPeriod(PeriodType $value)
 * @method ContractExtensionType getContractExtension()
 * @method self setContractExtension(ContractExtensionType $value)
 * @method RequestForTenderLineType getRequestForTenderLine()
 * @method self addRequestForTenderLine(RequestForTenderLineType $value)
 * @method self setRequestForTenderLine(RequestForTenderLineType ...$values)
 */
class ProcurementProjectType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Name" => NameType::class . "[]",
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:ProcurementTypeCode" => ProcurementTypeCodeType::class,
        "cbc:ProcurementSubTypeCode" => ProcurementSubTypeCodeType::class,
        "cbc:QualityControlCode" => QualityControlCodeType::class,
        "cbc:RequiredFeeAmount" => RequiredFeeAmountType::class,
        "cbc:FeeDescription" => FeeDescriptionType::class . "[]",
        "cbc:RequestedDeliveryDate" => RequestedDeliveryDateType::class,
        "cbc:EstimatedOverallContractQuantity" => EstimatedOverallContractQuantityType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cac:RequestedTenderTotal" => RequestedTenderTotalType::class,
        "cac:MainCommodityClassification" => CommodityClassificationType::class,
        "cac:AdditionalCommodityClassification" => CommodityClassificationType::class . "[]",
        "cac:RealizedLocation" => LocationType::class . "[]",
        "cac:PlannedPeriod" => PeriodType::class,
        "cac:ContractExtension" => ContractExtensionType::class,
        "cac:RequestForTenderLine" => RequestForTenderLineType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:Name" => 1,
    ];
}