<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TenderEnvelopeIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TenderEnvelopeTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OpenTenderIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ProcurementProjectLotType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TenderRequirementType;

/**
 *
 * @method mixed getTenderEnvelopeID()
 * @method self setTenderEnvelopeID($value)
 * @method mixed getTenderEnvelopeTypeCode()
 * @method self setTenderEnvelopeTypeCode($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getOpenTenderID()
 * @method self setOpenTenderID($value)
 * @method mixed getProcurementProjectLot()
 * @method self setProcurementProjectLot($value)
 * @method mixed getDocumentTenderRequirement()
 * @method self setDocumentTenderRequirement($value)
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