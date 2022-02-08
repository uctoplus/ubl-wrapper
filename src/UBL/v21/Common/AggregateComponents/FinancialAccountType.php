<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountFormatCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AliasNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentNoteType;

/**
 * Class FinancialAccountType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getAliasName()
 * @method self setAliasName($value)
 * @method mixed getAccountTypeCode()
 * @method self setAccountTypeCode($value)
 * @method mixed getAccountFormatCode()
 * @method self setAccountFormatCode($value)
 * @method mixed getCurrencyCode()
 * @method self setCurrencyCode($value)
 * @method mixed getPaymentNote()
 * @method self addPaymentNote($value)
 * @method self setPaymentNote($value)
 * @method mixed getFinancialInstitutionBranch()
 * @method self setFinancialInstitutionBranch($value)
 * @method mixed getCountry()
 * @method self setCountry($value)
 */
class FinancialAccountType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Name" => NameType::class,
        "cbc:AliasName" => AliasNameType::class,
        "cbc:AccountTypeCode" => AccountTypeCodeType::class,
        "cbc:AccountFormatCode" => AccountFormatCodeType::class,
        "cbc:CurrencyCode" => CurrencyCodeType::class,
        "cbc:PaymentNote" => PaymentNoteType::class . "[]",
        "cac:FinancialInstitutionBranch" => BranchType::class,
        "cac:Country" => CountryType::class,
    ];

    protected $minOccurs = [
    ];
}