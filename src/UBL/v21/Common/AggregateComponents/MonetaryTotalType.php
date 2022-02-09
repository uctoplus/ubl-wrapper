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
 * @method LineExtensionAmountType getLineExtensionAmount()
 * @method self setLineExtensionAmount(LineExtensionAmountType|string $value)
 * @method TaxExclusiveAmountType getTaxExclusiveAmount()
 * @method self setTaxExclusiveAmount(TaxExclusiveAmountType|string $value)
 * @method TaxInclusiveAmountType getTaxInclusiveAmount()
 * @method self setTaxInclusiveAmount(TaxInclusiveAmountType|string $value)
 * @method AllowanceTotalAmountType getAllowanceTotalAmount()
 * @method self setAllowanceTotalAmount(AllowanceTotalAmountType|string $value)
 * @method ChargeTotalAmountType getChargeTotalAmount()
 * @method self setChargeTotalAmount(ChargeTotalAmountType|string $value)
 * @method PrepaidAmountType getPrepaidAmount()
 * @method self setPrepaidAmount(PrepaidAmountType|string $value)
 * @method PayableRoundingAmountType getPayableRoundingAmount()
 * @method self setPayableRoundingAmount(PayableRoundingAmountType|string $value)
 * @method PayableAmountType getPayableAmount()
 * @method self setPayableAmount(PayableAmountType|string $value)
 * @method PayableAlternativeAmountType getPayableAlternativeAmount()
 * @method self setPayableAlternativeAmount(PayableAlternativeAmountType|string $value)
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