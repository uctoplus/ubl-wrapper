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
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method IssueDateType getIssueDate()
 * @method self setIssueDate(IssueDateType|string $value)
 * @method IssueTimeType getIssueTime()
 * @method self setIssueTime(IssueTimeType|string $value)
 * @method RevisionDateType getRevisionDate()
 * @method self setRevisionDate(RevisionDateType|string $value)
 * @method RevisionTimeType getRevisionTime()
 * @method self setRevisionTime(RevisionTimeType|string $value)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method VersionIDType getVersionID()
 * @method self setVersionID(VersionIDType|string $value)
 * @method PreviousVersionIDType getPreviousVersionID()
 * @method self setPreviousVersionID(PreviousVersionIDType|string $value)
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