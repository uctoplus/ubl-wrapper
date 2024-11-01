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
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method ValidationDateType getValidationDate()
 * @method self setValidationDate(ValidationDateType|string $value)
 * @method ValidationTimeType getValidationTime()
 * @method self setValidationTime(ValidationTimeType|string $value)
 * @method ValidatorIDType getValidatorID()
 * @method self setValidatorID(ValidatorIDType|string $value)
 * @method CanonicalizationMethodType getCanonicalizationMethod()
 * @method self setCanonicalizationMethod(CanonicalizationMethodType|string $value)
 * @method SignatureMethodType getSignatureMethod()
 * @method self setSignatureMethod(SignatureMethodType|string $value)
 * @method PartyType getSignatoryParty()
 * @method self setSignatoryParty(PartyType $value)
 * @method AttachmentType getDigitalSignatureAttachment()
 * @method self setDigitalSignatureAttachment(AttachmentType $value)
 * @method DocumentReferenceType getOriginalDocumentReference()
 * @method self setOriginalDocumentReference(DocumentReferenceType $value)
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