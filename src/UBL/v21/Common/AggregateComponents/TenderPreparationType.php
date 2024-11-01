<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OpenTenderIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TenderEnvelopeIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TenderEnvelopeTypeCodeType;

/**
 * Class TenderPreparationType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method TenderEnvelopeIDType getTenderEnvelopeID()
 * @method self setTenderEnvelopeID(TenderEnvelopeIDType|string $value)
 * @method TenderEnvelopeTypeCodeType getTenderEnvelopeTypeCode()
 * @method self setTenderEnvelopeTypeCode(TenderEnvelopeTypeCodeType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method OpenTenderIDType getOpenTenderID()
 * @method self setOpenTenderID(OpenTenderIDType|string $value)
 * @method ProcurementProjectLotType[] getProcurementProjectLot()
 * @method self addProcurementProjectLot(ProcurementProjectLotType $value)
 * @method self setProcurementProjectLot(ProcurementProjectLotType ...$values)
 * @method TenderRequirementType[] getDocumentTenderRequirement()
 * @method self addDocumentTenderRequirement(TenderRequirementType $value)
 * @method self setDocumentTenderRequirement(TenderRequirementType ...$values)
 */
class TenderPreparationType extends AggregateComponent
{
    protected $casts = [
        "cbc:TenderEnvelopeID" => TenderEnvelopeIDType::class,
        "cbc:TenderEnvelopeTypeCode" => TenderEnvelopeTypeCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:OpenTenderID" => OpenTenderIDType::class,
        "cac:ProcurementProjectLot" => ProcurementProjectLotType::class . "[]",
        "cac:DocumentTenderRequirement" => TenderRequirementType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:TenderEnvelopeID" => 1,
    ];
}