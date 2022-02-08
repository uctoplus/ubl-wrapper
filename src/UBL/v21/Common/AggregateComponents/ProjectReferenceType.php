<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\WorkPhaseReferenceType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getIssueDate()
 * @method self setIssueDate($value)
 * @method mixed getWorkPhaseReference()
 * @method self setWorkPhaseReference($value)
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