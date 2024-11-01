<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MiscellaneousEventTypeCodeType;

/**
 * Class MiscellaneousEventType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method MiscellaneousEventTypeCodeType getMiscellaneousEventTypeCode()
 * @method self setMiscellaneousEventTypeCode(MiscellaneousEventTypeCodeType|string $value)
 * @method EventLineItemType[] getEventLineItem()
 * @method self addEventLineItem(EventLineItemType $value)
 * @method self setEventLineItem(EventLineItemType ...$values)
 */
class MiscellaneousEventType extends AggregateComponent
{
    protected $casts = [
        "cbc:MiscellaneousEventTypeCode" => MiscellaneousEventTypeCodeType::class,
        "cac:EventLineItem" => EventLineItemType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:MiscellaneousEventTypeCode" => 1,
        "cac:EventLineItem" => 1,
    ];
}