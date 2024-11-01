<?php

namespace Uctoplus\UblWrapper\UBL\v21\MainDoc;

use Uctoplus\UblWrapper\UBL\Schema\MainDoc;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AttachmentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LineReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SignatureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomizationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DocumentTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DocumentTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ParentDocumentIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ParentDocumentTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ParentDocumentVersionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProfileExecutionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProfileIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Version;

/**
 * Class AttachedDocument
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\MainDoc
 *
 * @method CustomizationIDType getCustomizationID()
 * @method self setCustomizationID(CustomizationIDType|string $value)
 * @method ProfileIDType getProfileID()
 * @method self setProfileID(ProfileIDType|string $value)
 * @method ProfileExecutionIDType getProfileExecutionID()
 * @method self setProfileExecutionID(ProfileExecutionIDType|string $value)
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method IssueDateType getIssueDate()
 * @method self setIssueDate(IssueDateType|string $value)
 * @method IssueTimeType getIssueTime()
 * @method self setIssueTime(IssueTimeType|string $value)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method DocumentTypeCodeType getDocumentTypeCode()
 * @method self setDocumentTypeCode(DocumentTypeCodeType|string $value)
 * @method DocumentTypeType getDocumentType()
 * @method self setDocumentType(DocumentTypeType|string $value)
 * @method ParentDocumentIDType getParentDocumentID()
 * @method self setParentDocumentID(ParentDocumentIDType|string $value)
 * @method ParentDocumentTypeCodeType getParentDocumentTypeCode()
 * @method self setParentDocumentTypeCode(ParentDocumentTypeCodeType|string $value)
 * @method ParentDocumentVersionIDType getParentDocumentVersionID()
 * @method self setParentDocumentVersionID(ParentDocumentVersionIDType|string $value)
 * @method SignatureType[] getSignature()
 * @method self addSignature(SignatureType $value)
 * @method self setSignature(SignatureType ...$values)
 * @method PartyType getSenderParty()
 * @method self setSenderParty(PartyType $value)
 * @method PartyType getReceiverParty()
 * @method self setReceiverParty(PartyType $value)
 * @method AttachmentType getAttachment()
 * @method self setAttachment(AttachmentType $value)
 * @method LineReferenceType[] getParentDocumentLineReference()
 * @method self addParentDocumentLineReference(LineReferenceType $value)
 * @method self setParentDocumentLineReference(LineReferenceType ...$values)
 */
class AttachedDocument extends MainDoc
{
    protected $UBLVersionID = Version::VERSION_CODE;
    protected $xmlns = "urn:oasis:names:specification:ubl:schema:xsd:AttachedDocument-2";

    protected $casts = [
        "cbc:CustomizationID" => CustomizationIDType::class,
        "cbc:ProfileID" => ProfileIDType::class,
        "cbc:ProfileExecutionID" => ProfileExecutionIDType::class,
        "cbc:ID" => IDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cbc:IssueTime" => IssueTimeType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:DocumentTypeCode" => DocumentTypeCodeType::class,
        "cbc:DocumentType" => DocumentTypeType::class,
        "cbc:ParentDocumentID" => ParentDocumentIDType::class,
        "cbc:ParentDocumentTypeCode" => ParentDocumentTypeCodeType::class,
        "cbc:ParentDocumentVersionID" => ParentDocumentVersionIDType::class,
        "cac:Signature" => SignatureType::class . "[]",
        "cac:SenderParty" => PartyType::class,
        "cac:ReceiverParty" => PartyType::class,
        "cac:Attachment" => AttachmentType::class,
        "cac:ParentDocumentLineReference" => LineReferenceType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:IssueDate" => 1,
        "cbc:ParentDocumentID" => 1,
        "cac:SenderParty" => 1,
        "cac:ReceiverParty" => 1,
        "cac:Attachment" => 1,
    ];
}