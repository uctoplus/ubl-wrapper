<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FinancingInstrumentCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;

/**
 * Class TradeFinancingType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method FinancingInstrumentCodeType getFinancingInstrumentCode()
 * @method self setFinancingInstrumentCode(FinancingInstrumentCodeType|string $value)
 * @method DocumentReferenceType getContractDocumentReference()
 * @method self setContractDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType[] getDocumentReference()
 * @method self addDocumentReference(DocumentReferenceType $value)
 * @method self setDocumentReference(DocumentReferenceType ...$values)
 * @method PartyType getFinancingParty()
 * @method self setFinancingParty(PartyType $value)
 * @method FinancialAccountType getFinancingFinancialAccount()
 * @method self setFinancingFinancialAccount(FinancialAccountType $value)
 * @method ClauseType[] getClause()
 * @method self addClause(ClauseType $value)
 * @method self setClause(ClauseType ...$values)
 */
class TradeFinancingType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:FinancingInstrumentCode" => FinancingInstrumentCodeType::class,
        "cac:ContractDocumentReference" => DocumentReferenceType::class,
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:FinancingParty" => PartyType::class,
        "cac:FinancingFinancialAccount" => FinancialAccountType::class,
        "cac:Clause" => ClauseType::class . "[]",
    ];

    protected $minOccurs = [
        "cac:FinancingParty" => 1,
    ];
}