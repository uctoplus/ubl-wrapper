<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MandateTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumPaidAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumPaymentInstructionsNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SignatureIDType;

/**
 * Class PaymentMandateType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method MandateTypeCodeType getMandateTypeCode()
 * @method self setMandateTypeCode(MandateTypeCodeType|string $value)
 * @method MaximumPaymentInstructionsNumericType getMaximumPaymentInstructionsNumeric()
 * @method self setMaximumPaymentInstructionsNumeric(MaximumPaymentInstructionsNumericType|string $value)
 * @method MaximumPaidAmountType getMaximumPaidAmount()
 * @method self setMaximumPaidAmount(MaximumPaidAmountType|string $value)
 * @method SignatureIDType getSignatureID()
 * @method self setSignatureID(SignatureIDType|string $value)
 * @method PartyType getPayerParty()
 * @method self setPayerParty(PartyType $value)
 * @method FinancialAccountType getPayerFinancialAccount()
 * @method self setPayerFinancialAccount(FinancialAccountType $value)
 * @method PeriodType getValidityPeriod()
 * @method self setValidityPeriod(PeriodType $value)
 * @method PeriodType getPaymentReversalPeriod()
 * @method self setPaymentReversalPeriod(PeriodType $value)
 * @method ClauseType[] getClause()
 * @method self addClause(ClauseType $value)
 * @method self setClause(ClauseType ...$values)
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