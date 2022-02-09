<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CopyIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DocumentDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DocumentStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DocumentTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DocumentTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LanguageIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LocaleCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VersionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\XPathType;

/**
 * Class DocumentReferenceType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method CopyIndicatorType getCopyIndicator()
 * @method self setCopyIndicator(CopyIndicatorType|string $value)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method IssueDateType getIssueDate()
 * @method self setIssueDate(IssueDateType|string $value)
 * @method IssueTimeType getIssueTime()
 * @method self setIssueTime(IssueTimeType|string $value)
 * @method DocumentTypeCodeType getDocumentTypeCode()
 * @method self setDocumentTypeCode(DocumentTypeCodeType|string $value)
 * @method DocumentTypeType getDocumentType()
 * @method self setDocumentType(DocumentTypeType|string $value)
 * @method XPathType getXPath()
 * @method self addXPath(XPathType|string $value)
 * @method self setXPath(XPathType ...$values)
 * @method LanguageIDType getLanguageID()
 * @method self setLanguageID(LanguageIDType|string $value)
 * @method LocaleCodeType getLocaleCode()
 * @method self setLocaleCode(LocaleCodeType|string $value)
 * @method VersionIDType getVersionID()
 * @method self setVersionID(VersionIDType|string $value)
 * @method DocumentStatusCodeType getDocumentStatusCode()
 * @method self setDocumentStatusCode(DocumentStatusCodeType|string $value)
 * @method DocumentDescriptionType getDocumentDescription()
 * @method self addDocumentDescription(DocumentDescriptionType|string $value)
 * @method self setDocumentDescription(DocumentDescriptionType ...$values)
 * @method AttachmentType getAttachment()
 * @method self setAttachment(AttachmentType $value)
 * @method PeriodType getValidityPeriod()
 * @method self setValidityPeriod(PeriodType $value)
 * @method PartyType getIssuerParty()
 * @method self setIssuerParty(PartyType $value)
 * @method ResultOfVerificationType getResultOfVerification()
 * @method self setResultOfVerification(ResultOfVerificationType $value)
 */
class DocumentReferenceType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:CopyIndicator" => CopyIndicatorType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cbc:IssueTime" => IssueTimeType::class,
        "cbc:DocumentTypeCode" => DocumentTypeCodeType::class,
        "cbc:DocumentType" => DocumentTypeType::class,
        "cbc:XPath" => XPathType::class . "[]",
        "cbc:LanguageID" => LanguageIDType::class,
        "cbc:LocaleCode" => LocaleCodeType::class,
        "cbc:VersionID" => VersionIDType::class,
        "cbc:DocumentStatusCode" => DocumentStatusCodeType::class,
        "cbc:DocumentDescription" => DocumentDescriptionType::class . "[]",
        "cac:Attachment" => AttachmentType::class,
        "cac:ValidityPeriod" => PeriodType::class,
        "cac:IssuerParty" => PartyType::class,
        "cac:ResultOfVerification" => ResultOfVerificationType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}