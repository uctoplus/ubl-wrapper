<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;

/**
 * Class ProjectReferenceType
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
 * @method WorkPhaseReferenceType[] getWorkPhaseReference()
 * @method self addWorkPhaseReference(WorkPhaseReferenceType $value)
 * @method self setWorkPhaseReference(WorkPhaseReferenceType ...$values)
 */
class ProjectReferenceType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cac:WorkPhaseReference" => WorkPhaseReferenceType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}