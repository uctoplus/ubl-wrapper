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
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getCopyIndicator()
 * @method self setCopyIndicator($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getIssueDate()
 * @method self setIssueDate($value)
 * @method mixed getIssueTime()
 * @method self setIssueTime($value)
 * @method mixed getDocumentTypeCode()
 * @method self setDocumentTypeCode($value)
 * @method mixed getDocumentType()
 * @method self setDocumentType($value)
 * @method mixed getXPath()
 * @method self addXPath($value)
 * @method self setXPath($value)
 * @method mixed getLanguageID()
 * @method self setLanguageID($value)
 * @method mixed getLocaleCode()
 * @method self setLocaleCode($value)
 * @method mixed getVersionID()
 * @method self setVersionID($value)
 * @method mixed getDocumentStatusCode()
 * @method self setDocumentStatusCode($value)
 * @method mixed getDocumentDescription()
 * @method self addDocumentDescription($value)
 * @method self setDocumentDescription($value)
 * @method mixed getAttachment()
 * @method self setAttachment($value)
 * @method mixed getValidityPeriod()
 * @method self setValidityPeriod($value)
 * @method mixed getIssuerParty()
 * @method self setIssuerParty($value)
 * @method mixed getResultOfVerification()
 * @method self setResultOfVerification($value)
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