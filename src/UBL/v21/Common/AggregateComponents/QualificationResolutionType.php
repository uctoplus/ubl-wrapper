<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AdmissionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExclusionReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResolutionDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResolutionTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResolutionType;

/**
 * Class QualificationResolutionType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method AdmissionCodeType getAdmissionCode()
 * @method self setAdmissionCode(AdmissionCodeType|string $value)
 * @method ExclusionReasonType[] getExclusionReason()
 * @method self addExclusionReason(ExclusionReasonType|string $value)
 * @method self setExclusionReason(ExclusionReasonType ...$values)
 * @method ResolutionType[] getResolution()
 * @method self addResolution(ResolutionType|string $value)
 * @method self setResolution(ResolutionType ...$values)
 * @method ResolutionDateType getResolutionDate()
 * @method self setResolutionDate(ResolutionDateType|string $value)
 * @method ResolutionTimeType getResolutionTime()
 * @method self setResolutionTime(ResolutionTimeType|string $value)
 * @method ProcurementProjectLotType getProcurementProjectLot()
 * @method self setProcurementProjectLot(ProcurementProjectLotType $value)
 */
class QualificationResolutionType extends AggregateComponent
{
    protected $casts = [
        "cbc:AdmissionCode" => AdmissionCodeType::class,
        "cbc:ExclusionReason" => ExclusionReasonType::class . "[]",
        "cbc:Resolution" => ResolutionType::class . "[]",
        "cbc:ResolutionDate" => ResolutionDateType::class,
        "cbc:ResolutionTime" => ResolutionTimeType::class,
        "cac:ProcurementProjectLot" => ProcurementProjectLotType::class,
    ];

    protected $minOccurs = [
        "cbc:AdmissionCode" => 1,
        "cbc:ResolutionDate" => 1,
    ];
}