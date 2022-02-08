<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumerIncentiveTacticTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DisplayTacticTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FeatureTacticTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TradeItemPackingLabelingTypeCodeType;

/**
 *
 * @method mixed getConsumerIncentiveTacticTypeCode()
 * @method self setConsumerIncentiveTacticTypeCode($value)
 * @method mixed getDisplayTacticTypeCode()
 * @method self setDisplayTacticTypeCode($value)
 * @method mixed getFeatureTacticTypeCode()
 * @method self setFeatureTacticTypeCode($value)
 * @method mixed getTradeItemPackingLabelingTypeCode()
 * @method self setTradeItemPackingLabelingTypeCode($value)
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