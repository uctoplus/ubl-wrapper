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
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getLastRevisionDate()
 * @method self setLastRevisionDate($value)
 * @method mixed getLastRevisionTime()
 * @method self setLastRevisionTime($value)
 * @method mixed getNote()
 * @method self addNote($value)
 * @method self setNote($value)
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getAgencyID()
 * @method self setAgencyID($value)
 * @method mixed getAgencyName()
 * @method self setAgencyName($value)
 * @method mixed getVersionID()
 * @method self setVersionID($value)
 * @method mixed getURI()
 * @method self setURI($value)
 * @method mixed getSchemeURI()
 * @method self setSchemeURI($value)
 * @method mixed getLanguageID()
 * @method self setLanguageID($value)
 * @method mixed getClassificationCategory()
 * @method self addClassificationCategory($value)
 * @method self setClassificationCategory($value)
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