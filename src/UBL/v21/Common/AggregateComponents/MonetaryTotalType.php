<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AllowanceTotalAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChargeTotalAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PayableAlternativeAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PayableAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PayableRoundingAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PrepaidAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxExclusiveAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxInclusiveAmountType;

/**
 * Class MonetaryTotalType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getLineExtensionAmount()
 * @method self setLineExtensionAmount($value)
 * @method mixed getTaxExclusiveAmount()
 * @method self setTaxExclusiveAmount($value)
 * @method mixed getTaxInclusiveAmount()
 * @method self setTaxInclusiveAmount($value)
 * @method mixed getAllowanceTotalAmount()
 * @method self setAllowanceTotalAmount($value)
 * @method mixed getChargeTotalAmount()
 * @method self setChargeTotalAmount($value)
 * @method mixed getPrepaidAmount()
 * @method self setPrepaidAmount($value)
 * @method mixed getPayableRoundingAmount()
 * @method self setPayableRoundingAmount($value)
 * @method mixed getPayableAmount()
 * @method self setPayableAmount($value)
 * @method mixed getPayableAlternativeAmount()
 * @method self setPayableAlternativeAmount($value)
 */
class MonetaryTotalType extends AggregateComponent
{
    protected $casts = [
        "cbc:LineExtensionAmount" => LineExtensionAmountType::class,
        "cbc:TaxExclusiveAmount" => TaxExclusiveAmountType::class,
        "cbc:TaxInclusiveAmount" => TaxInclusiveAmountType::class,
        "cbc:AllowanceTotalAmount" => AllowanceTotalAmountType::class,
        "cbc:ChargeTotalAmount" => ChargeTotalAmountType::class,
        "cbc:PrepaidAmount" => PrepaidAmountType::class,
        "cbc:PayableRoundingAmount" => PayableRoundingAmountType::class,
        "cbc:PayableAmount" => PayableAmountType::class,
        "cbc:PayableAlternativeAmount" => PayableAlternativeAmountType::class,
    ];

    protected $minOccurs = [
        "cbc:PayableAmount" => 1,
    ];
}