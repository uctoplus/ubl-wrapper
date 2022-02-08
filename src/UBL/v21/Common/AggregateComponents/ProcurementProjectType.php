<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProcurementTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProcurementSubTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QualityControlCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequiredFeeAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FeeDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequestedDeliveryDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EstimatedOverallContractQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\RequestedTenderTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CommodityClassificationType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LocationType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ContractExtensionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\RequestForTenderLineType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getProcurementTypeCode()
 * @method self setProcurementTypeCode($value)
 * @method mixed getProcurementSubTypeCode()
 * @method self setProcurementSubTypeCode($value)
 * @method mixed getQualityControlCode()
 * @method self setQualityControlCode($value)
 * @method mixed getRequiredFeeAmount()
 * @method self setRequiredFeeAmount($value)
 * @method mixed getFeeDescription()
 * @method self setFeeDescription($value)
 * @method mixed getRequestedDeliveryDate()
 * @method self setRequestedDeliveryDate($value)
 * @method mixed getEstimatedOverallContractQuantity()
 * @method self setEstimatedOverallContractQuantity($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getRequestedTenderTotal()
 * @method self setRequestedTenderTotal($value)
 * @method mixed getMainCommodityClassification()
 * @method self setMainCommodityClassification($value)
 * @method mixed getAdditionalCommodityClassification()
 * @method self setAdditionalCommodityClassification($value)
 * @method mixed getRealizedLocation()
 * @method self setRealizedLocation($value)
 * @method mixed getPlannedPeriod()
 * @method self setPlannedPeriod($value)
 * @method mixed getContractExtension()
 * @method self setContractExtension($value)
 * @method mixed getRequestForTenderLine()
 * @method self setRequestForTenderLine($value)
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