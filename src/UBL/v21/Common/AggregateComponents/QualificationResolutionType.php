<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AdmissionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExclusionReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResolutionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResolutionDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResolutionTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ProcurementProjectLotType;

/**
 *
 * @method mixed getAdmissionCode()
 * @method self setAdmissionCode($value)
 * @method mixed getExclusionReason()
 * @method self setExclusionReason($value)
 * @method mixed getResolution()
 * @method self setResolution($value)
 * @method mixed getResolutionDate()
 * @method self setResolutionDate($value)
 * @method mixed getResolutionTime()
 * @method self setResolutionTime($value)
 * @method mixed getProcurementProjectLot()
 * @method self setProcurementProjectLot($value)
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