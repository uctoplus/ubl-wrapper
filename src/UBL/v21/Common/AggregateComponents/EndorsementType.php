<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ApprovalStatusType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DocumentIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RemarksType;

/**
 * Class EndorsementType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method DocumentIDType getDocumentID()
 * @method self setDocumentID(DocumentIDType|string $value)
 * @method ApprovalStatusType getApprovalStatus()
 * @method self setApprovalStatus(ApprovalStatusType|string $value)
 * @method RemarksType getRemarks()
 * @method self addRemarks(RemarksType|string $value)
 * @method self setRemarks(RemarksType ...$values)
 * @method EndorserPartyType getEndorserParty()
 * @method self setEndorserParty(EndorserPartyType $value)
 * @method SignatureType getSignature()
 * @method self addSignature(SignatureType $value)
 * @method self setSignature(SignatureType ...$values)
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