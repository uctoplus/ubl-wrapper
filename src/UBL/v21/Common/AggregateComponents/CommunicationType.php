<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChannelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChannelType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueType;

/**
 * Class CommunicationType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ChannelCodeType getChannelCode()
 * @method self setChannelCode(ChannelCodeType|string $value)
 * @method ChannelType getChannel()
 * @method self setChannel(ChannelType|string $value)
 * @method ValueType getValue()
 * @method self setValue(ValueType|string $value)
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