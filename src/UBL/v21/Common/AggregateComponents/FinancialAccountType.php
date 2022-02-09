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
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method AliasNameType getAliasName()
 * @method self setAliasName(AliasNameType|string $value)
 * @method AccountTypeCodeType getAccountTypeCode()
 * @method self setAccountTypeCode(AccountTypeCodeType|string $value)
 * @method AccountFormatCodeType getAccountFormatCode()
 * @method self setAccountFormatCode(AccountFormatCodeType|string $value)
 * @method CurrencyCodeType getCurrencyCode()
 * @method self setCurrencyCode(CurrencyCodeType|string $value)
 * @method PaymentNoteType getPaymentNote()
 * @method self addPaymentNote(PaymentNoteType|string $value)
 * @method self setPaymentNote(PaymentNoteType ...$values)
 * @method BranchType getFinancialInstitutionBranch()
 * @method self setFinancialInstitutionBranch(BranchType $value)
 * @method CountryType getCountry()
 * @method self setCountry(CountryType $value)
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