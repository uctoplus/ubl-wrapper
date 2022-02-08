<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ProcurementProjectLotType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\QualifyingPartyType;

/**
 *
 * @method mixed getInterestedProcurementProjectLot()
 * @method self setInterestedProcurementProjectLot($value)
 * @method mixed getMainQualifyingParty()
 * @method self setMainQualifyingParty($value)
 * @method mixed getAdditionalQualifyingParty()
 * @method self setAdditionalQualifyingParty($value)
 */
class TendererPartyQualificationType extends AggregateComponent
{
    protected $casts = [
        "cac:InterestedProcurementProjectLot" => ProcurementProjectLotType::class . "[]",
        "cac:MainQualifyingParty" => QualifyingPartyType::class,
        "cac:AdditionalQualifyingParty" => QualifyingPartyType::class . "[]",
    ];

    protected $minOccurs = [
        "cac:MainQualifyingParty" => 1,
    ];
}