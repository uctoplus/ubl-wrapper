<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreviousVersionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RevisionDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RevisionTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VersionIDType;

/**
 * Class CatalogueReferenceType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getIssueDate()
 * @method self setIssueDate($value)
 * @method mixed getIssueTime()
 * @method self setIssueTime($value)
 * @method mixed getRevisionDate()
 * @method self setRevisionDate($value)
 * @method mixed getRevisionTime()
 * @method self setRevisionTime($value)
 * @method mixed getNote()
 * @method self addNote($value)
 * @method self setNote($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getVersionID()
 * @method self setVersionID($value)
 * @method mixed getPreviousVersionID()
 * @method self setPreviousVersionID($value)
 */
class CatalogueReferenceType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cbc:IssueTime" => IssueTimeType::class,
        "cbc:RevisionDate" => RevisionDateType::class,
        "cbc:RevisionTime" => RevisionTimeType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:VersionID" => VersionIDType::class,
        "cbc:PreviousVersionID" => PreviousVersionIDType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}