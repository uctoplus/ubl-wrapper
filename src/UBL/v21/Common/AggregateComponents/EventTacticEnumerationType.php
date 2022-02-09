<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumerIncentiveTacticTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DisplayTacticTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FeatureTacticTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TradeItemPackingLabelingTypeCodeType;

/**
 * Class EventTacticEnumerationType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ConsumerIncentiveTacticTypeCodeType getConsumerIncentiveTacticTypeCode()
 * @method self setConsumerIncentiveTacticTypeCode(ConsumerIncentiveTacticTypeCodeType|string $value)
 * @method DisplayTacticTypeCodeType getDisplayTacticTypeCode()
 * @method self setDisplayTacticTypeCode(DisplayTacticTypeCodeType|string $value)
 * @method FeatureTacticTypeCodeType getFeatureTacticTypeCode()
 * @method self setFeatureTacticTypeCode(FeatureTacticTypeCodeType|string $value)
 * @method TradeItemPackingLabelingTypeCodeType getTradeItemPackingLabelingTypeCode()
 * @method self setTradeItemPackingLabelingTypeCode(TradeItemPackingLabelingTypeCodeType|string $value)
 */
class EventTacticEnumerationType extends AggregateComponent
{
    protected $casts = [
        "cbc:ConsumerIncentiveTacticTypeCode" => ConsumerIncentiveTacticTypeCodeType::class,
        "cbc:DisplayTacticTypeCode" => DisplayTacticTypeCodeType::class,
        "cbc:FeatureTacticTypeCode" => FeatureTacticTypeCodeType::class,
        "cbc:TradeItemPackingLabelingTypeCode" => TradeItemPackingLabelingTypeCodeType::class,
    ];

    protected $minOccurs = [
    ];
}