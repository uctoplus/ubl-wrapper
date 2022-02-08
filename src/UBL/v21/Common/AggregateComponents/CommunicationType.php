<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChannelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChannelType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueType;

/**
 *
 * @method mixed getChannelCode()
 * @method self setChannelCode($value)
 * @method mixed getChannel()
 * @method self setChannel($value)
 * @method mixed getValue()
 * @method self setValue($value)
 */
class CommunicationType extends AggregateComponent
{
    protected $casts = [
        "cbc:ChannelCode" => ChannelCodeType::class,
        "cbc:Channel" => ChannelType::class,
        "cbc:Value" => ValueType::class,
    ];

    protected $minOccurs = [
    ];
}