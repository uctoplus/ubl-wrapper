<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreviousCancellationReasonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProcessReasonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProcessReasonType;

/**
 * Class ProcessJustificationType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method PreviousCancellationReasonCodeType getPreviousCancellationReasonCode()
 * @method self setPreviousCancellationReasonCode(PreviousCancellationReasonCodeType|string $value)
 * @method ProcessReasonCodeType getProcessReasonCode()
 * @method self setProcessReasonCode(ProcessReasonCodeType|string $value)
 * @method ProcessReasonType getProcessReason()
 * @method self addProcessReason(ProcessReasonType|string $value)
 * @method self setProcessReason(ProcessReasonType ...$values)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 */
class ProcessJustificationType extends AggregateComponent
{
    protected $casts = [
        "cbc:PreviousCancellationReasonCode" => PreviousCancellationReasonCodeType::class,
        "cbc:ProcessReasonCode" => ProcessReasonCodeType::class,
        "cbc:ProcessReason" => ProcessReasonType::class . "[]",
        "cbc:Description" => DescriptionType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}