<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FinancingInstrumentCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\FinancialAccountType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ClauseType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getFinancingInstrumentCode()
 * @method self setFinancingInstrumentCode($value)
 * @method mixed getContractDocumentReference()
 * @method self setContractDocumentReference($value)
 * @method mixed getDocumentReference()
 * @method self setDocumentReference($value)
 * @method mixed getFinancingParty()
 * @method self setFinancingParty($value)
 * @method mixed getFinancingFinancialAccount()
 * @method self setFinancingFinancialAccount($value)
 * @method mixed getClause()
 * @method self setClause($value)
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