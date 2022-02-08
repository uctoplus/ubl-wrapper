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
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getEstimatedOverallContractAmount()
 * @method self setEstimatedOverallContractAmount($value)
 * @method mixed getTotalAmount()
 * @method self setTotalAmount($value)
 * @method mixed getTaxIncludedIndicator()
 * @method self setTaxIncludedIndicator($value)
 * @method mixed getMinimumAmount()
 * @method self setMinimumAmount($value)
 * @method mixed getMaximumAmount()
 * @method self setMaximumAmount($value)
 * @method mixed getMonetaryScope()
 * @method self addMonetaryScope($value)
 * @method self setMonetaryScope($value)
 * @method mixed getAverageSubsequentContractAmount()
 * @method self setAverageSubsequentContractAmount($value)
 * @method mixed getApplicableTaxCategory()
 * @method self addApplicableTaxCategory($value)
 * @method self setApplicableTaxCategory($value)
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