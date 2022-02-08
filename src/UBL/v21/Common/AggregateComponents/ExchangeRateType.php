<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SourceCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SourceCurrencyBaseRateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TargetCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TargetCurrencyBaseRateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExchangeMarketIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CalculationRateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MathematicOperatorCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DateType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ContractType;

/**
 *
 * @method mixed getSourceCurrencyCode()
 * @method self setSourceCurrencyCode($value)
 * @method mixed getSourceCurrencyBaseRate()
 * @method self setSourceCurrencyBaseRate($value)
 * @method mixed getTargetCurrencyCode()
 * @method self setTargetCurrencyCode($value)
 * @method mixed getTargetCurrencyBaseRate()
 * @method self setTargetCurrencyBaseRate($value)
 * @method mixed getExchangeMarketID()
 * @method self setExchangeMarketID($value)
 * @method mixed getCalculationRate()
 * @method self setCalculationRate($value)
 * @method mixed getMathematicOperatorCode()
 * @method self setMathematicOperatorCode($value)
 * @method mixed getDate()
 * @method self setDate($value)
 * @method mixed getForeignExchangeContract()
 * @method self setForeignExchangeContract($value)
 */
class ExchangeRateType extends AggregateComponent
{
    protected $casts = [
        "cbc:SourceCurrencyCode" => SourceCurrencyCodeType::class,
        "cbc:SourceCurrencyBaseRate" => SourceCurrencyBaseRateType::class,
        "cbc:TargetCurrencyCode" => TargetCurrencyCodeType::class,
        "cbc:TargetCurrencyBaseRate" => TargetCurrencyBaseRateType::class,
        "cbc:ExchangeMarketID" => ExchangeMarketIDType::class,
        "cbc:CalculationRate" => CalculationRateType::class,
        "cbc:MathematicOperatorCode" => MathematicOperatorCodeType::class,
        "cbc:Date" => DateType::class,
        "cac:ForeignExchangeContract" => ContractType::class,
    ];

    protected $minOccurs = [
        "cbc:SourceCurrencyCode" => 1,
        "cbc:TargetCurrencyCode" => 1,
    ];
}