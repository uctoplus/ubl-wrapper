<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;

/**
 * Class TendererPartyQualificationType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getInterestedProcurementProjectLot()
 * @method self addInterestedProcurementProjectLot($value)
 * @method self setInterestedProcurementProjectLot($value)
 * @method mixed getMainQualifyingParty()
 * @method self setMainQualifyingParty($value)
 * @method mixed getAdditionalQualifyingParty()
 * @method self addAdditionalQualifyingParty($value)
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