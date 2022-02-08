<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CommentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;

/**
 * Class EventCommentType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getComment()
 * @method self setComment($value)
 * @method mixed getIssueDate()
 * @method self setIssueDate($value)
 * @method mixed getIssueTime()
 * @method self setIssueTime($value)
 */
class EventCommentType extends AggregateComponent
{
    protected $casts = [
        "cbc:Comment" => CommentType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cbc:IssueTime" => IssueTimeType::class,
    ];

    protected $minOccurs = [
        "cbc:Comment" => 1,
    ];
}