<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AverageSubsequentContractAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EstimatedOverallContractAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MonetaryScopeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxIncludedIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalAmountType;

/**
 * Class RequestedTenderTotalType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method EstimatedOverallContractAmountType getEstimatedOverallContractAmount()
 * @method self setEstimatedOverallContractAmount(EstimatedOverallContractAmountType|string $value)
 * @method TotalAmountType getTotalAmount()
 * @method self setTotalAmount(TotalAmountType|string $value)
 * @method TaxIncludedIndicatorType getTaxIncludedIndicator()
 * @method self setTaxIncludedIndicator(TaxIncludedIndicatorType|string $value)
 * @method MinimumAmountType getMinimumAmount()
 * @method self setMinimumAmount(MinimumAmountType|string $value)
 * @method MaximumAmountType getMaximumAmount()
 * @method self setMaximumAmount(MaximumAmountType|string $value)
 * @method MonetaryScopeType[] getMonetaryScope()
 * @method self addMonetaryScope(MonetaryScopeType|string $value)
 * @method self setMonetaryScope(MonetaryScopeType ...$values)
 * @method AverageSubsequentContractAmountType getAverageSubsequentContractAmount()
 * @method self setAverageSubsequentContractAmount(AverageSubsequentContractAmountType|string $value)
 * @method TaxCategoryType[] getApplicableTaxCategory()
 * @method self addApplicableTaxCategory(TaxCategoryType $value)
 * @method self setApplicableTaxCategory(TaxCategoryType ...$values)
 */
class RequestedTenderTotalType extends AggregateComponent
{
    protected $casts = [
        "cbc:EstimatedOverallContractAmount" => EstimatedOverallContractAmountType::class,
        "cbc:TotalAmount" => TotalAmountType::class,
        "cbc:TaxIncludedIndicator" => TaxIncludedIndicatorType::class,
        "cbc:MinimumAmount" => MinimumAmountType::class,
        "cbc:MaximumAmount" => MaximumAmountType::class,
        "cbc:MonetaryScope" => MonetaryScopeType::class . "[]",
        "cbc:AverageSubsequentContractAmount" => AverageSubsequentContractAmountType::class,
        "cac:ApplicableTaxCategory" => TaxCategoryType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}