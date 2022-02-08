<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MandateTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumPaymentInstructionsNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumPaidAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SignatureIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\FinancialAccountType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ClauseType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getMandateTypeCode()
 * @method self setMandateTypeCode($value)
 * @method mixed getMaximumPaymentInstructionsNumeric()
 * @method self setMaximumPaymentInstructionsNumeric($value)
 * @method mixed getMaximumPaidAmount()
 * @method self setMaximumPaidAmount($value)
 * @method mixed getSignatureID()
 * @method self setSignatureID($value)
 * @method mixed getPayerParty()
 * @method self setPayerParty($value)
 * @method mixed getPayerFinancialAccount()
 * @method self setPayerFinancialAccount($value)
 * @method mixed getValidityPeriod()
 * @method self setValidityPeriod($value)
 * @method mixed getPaymentReversalPeriod()
 * @method self setPaymentReversalPeriod($value)
 * @method mixed getClause()
 * @method self setClause($value)
 */
class PaymentMandateType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:MandateTypeCode" => MandateTypeCodeType::class,
        "cbc:MaximumPaymentInstructionsNumeric" => MaximumPaymentInstructionsNumericType::class,
        "cbc:MaximumPaidAmount" => MaximumPaidAmountType::class,
        "cbc:SignatureID" => SignatureIDType::class,
        "cac:PayerParty" => PartyType::class,
        "cac:PayerFinancialAccount" => FinancialAccountType::class,
        "cac:ValidityPeriod" => PeriodType::class,
        "cac:PaymentReversalPeriod" => PeriodType::class,
        "cac:Clause" => ClauseType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}