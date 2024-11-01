<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;

/**
 * Class TendererPartyQualificationType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ProcurementProjectLotType[] getInterestedProcurementProjectLot()
 * @method self addInterestedProcurementProjectLot(ProcurementProjectLotType $value)
 * @method self setInterestedProcurementProjectLot(ProcurementProjectLotType ...$values)
 * @method QualifyingPartyType getMainQualifyingParty()
 * @method self setMainQualifyingParty(QualifyingPartyType $value)
 * @method QualifyingPartyType[] getAdditionalQualifyingParty()
 * @method self addAdditionalQualifyingParty(QualifyingPartyType $value)
 * @method self setAdditionalQualifyingParty(QualifyingPartyType ...$values)
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