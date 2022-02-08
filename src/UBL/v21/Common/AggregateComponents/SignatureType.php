<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CanonicalizationMethodType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SignatureMethodType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidationDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidationTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidatorIDType;

/**
 * Class SignatureType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getNote()
 * @method self addNote($value)
 * @method self setNote($value)
 * @method mixed getValidationDate()
 * @method self setValidationDate($value)
 * @method mixed getValidationTime()
 * @method self setValidationTime($value)
 * @method mixed getValidatorID()
 * @method self setValidatorID($value)
 * @method mixed getCanonicalizationMethod()
 * @method self setCanonicalizationMethod($value)
 * @method mixed getSignatureMethod()
 * @method self setSignatureMethod($value)
 * @method mixed getSignatoryParty()
 * @method self setSignatoryParty($value)
 * @method mixed getDigitalSignatureAttachment()
 * @method self setDigitalSignatureAttachment($value)
 * @method mixed getOriginalDocumentReference()
 * @method self setOriginalDocumentReference($value)
 */
class SignatureType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:ValidationDate" => ValidationDateType::class,
        "cbc:ValidationTime" => ValidationTimeType::class,
        "cbc:ValidatorID" => ValidatorIDType::class,
        "cbc:CanonicalizationMethod" => CanonicalizationMethodType::class,
        "cbc:SignatureMethod" => SignatureMethodType::class,
        "cac:SignatoryParty" => PartyType::class,
        "cac:DigitalSignatureAttachment" => AttachmentType::class,
        "cac:OriginalDocumentReference" => DocumentReferenceType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}