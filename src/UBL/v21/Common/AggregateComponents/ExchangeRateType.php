<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CalculationRateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExchangeMarketIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MathematicOperatorCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SourceCurrencyBaseRateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SourceCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TargetCurrencyBaseRateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TargetCurrencyCodeType;

/**
 * Class ExchangeRateType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method SourceCurrencyCodeType getSourceCurrencyCode()
 * @method self setSourceCurrencyCode(SourceCurrencyCodeType|string $value)
 * @method SourceCurrencyBaseRateType getSourceCurrencyBaseRate()
 * @method self setSourceCurrencyBaseRate(SourceCurrencyBaseRateType|string $value)
 * @method TargetCurrencyCodeType getTargetCurrencyCode()
 * @method self setTargetCurrencyCode(TargetCurrencyCodeType|string $value)
 * @method TargetCurrencyBaseRateType getTargetCurrencyBaseRate()
 * @method self setTargetCurrencyBaseRate(TargetCurrencyBaseRateType|string $value)
 * @method ExchangeMarketIDType getExchangeMarketID()
 * @method self setExchangeMarketID(ExchangeMarketIDType|string $value)
 * @method CalculationRateType getCalculationRate()
 * @method self setCalculationRate(CalculationRateType|string $value)
 * @method MathematicOperatorCodeType getMathematicOperatorCode()
 * @method self setMathematicOperatorCode(MathematicOperatorCodeType|string $value)
 * @method DateType getDate()
 * @method self setDate(DateType|string $value)
 * @method ContractType getForeignExchangeContract()
 * @method self setForeignExchangeContract(ContractType $value)
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