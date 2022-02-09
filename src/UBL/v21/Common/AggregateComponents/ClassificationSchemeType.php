<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AgencyIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AgencyNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LanguageIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LastRevisionDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LastRevisionTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SchemeURIType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\URIType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VersionIDType;

/**
 * Class ClassificationSchemeType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method LastRevisionDateType getLastRevisionDate()
 * @method self setLastRevisionDate(LastRevisionDateType|string $value)
 * @method LastRevisionTimeType getLastRevisionTime()
 * @method self setLastRevisionTime(LastRevisionTimeType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method AgencyIDType getAgencyID()
 * @method self setAgencyID(AgencyIDType|string $value)
 * @method AgencyNameType getAgencyName()
 * @method self setAgencyName(AgencyNameType|string $value)
 * @method VersionIDType getVersionID()
 * @method self setVersionID(VersionIDType|string $value)
 * @method URIType getURI()
 * @method self setURI(URIType|string $value)
 * @method SchemeURIType getSchemeURI()
 * @method self setSchemeURI(SchemeURIType|string $value)
 * @method LanguageIDType getLanguageID()
 * @method self setLanguageID(LanguageIDType|string $value)
 * @method ClassificationCategoryType getClassificationCategory()
 * @method self addClassificationCategory(ClassificationCategoryType $value)
 * @method self setClassificationCategory(ClassificationCategoryType ...$values)
 */
class ClassificationSchemeType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:LastRevisionDate" => LastRevisionDateType::class,
        "cbc:LastRevisionTime" => LastRevisionTimeType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:Name" => NameType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:AgencyID" => AgencyIDType::class,
        "cbc:AgencyName" => AgencyNameType::class,
        "cbc:VersionID" => VersionIDType::class,
        "cbc:URI" => URIType::class,
        "cbc:SchemeURI" => SchemeURIType::class,
        "cbc:LanguageID" => LanguageIDType::class,
        "cac:ClassificationCategory" => ClassificationCategoryType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cac:ClassificationCategory" => 1,
    ];
}