<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DocumentIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ApprovalStatusType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RemarksType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\EndorserPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SignatureType;

/**
 *
 * @method mixed getDocumentID()
 * @method self setDocumentID($value)
 * @method mixed getApprovalStatus()
 * @method self setApprovalStatus($value)
 * @method mixed getRemarks()
 * @method self setRemarks($value)
 * @method mixed getEndorserParty()
 * @method self setEndorserParty($value)
 * @method mixed getSignature()
 * @method self setSignature($value)
 */
class EndorsementType extends AggregateComponent
{
    protected $casts = [
        "cbc:DocumentID" => DocumentIDType::class,
        "cbc:ApprovalStatus" => ApprovalStatusType::class,
        "cbc:Remarks" => RemarksType::class . "[]",
        "cac:EndorserParty" => EndorserPartyType::class,
        "cac:Signature" => SignatureType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:DocumentID" => 1,
        "cbc:ApprovalStatus" => 1,
        "cac:EndorserParty" => 1,
    ];
}