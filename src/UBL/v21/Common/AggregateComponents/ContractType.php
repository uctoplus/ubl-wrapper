<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NominationDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NominationTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContractTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContractTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VersionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getIssueDate()
 * @method self setIssueDate($value)
 * @method mixed getIssueTime()
 * @method self setIssueTime($value)
 * @method mixed getNominationDate()
 * @method self setNominationDate($value)
 * @method mixed getNominationTime()
 * @method self setNominationTime($value)
 * @method mixed getContractTypeCode()
 * @method self setContractTypeCode($value)
 * @method mixed getContractType()
 * @method self setContractType($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getVersionID()
 * @method self setVersionID($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getValidityPeriod()
 * @method self setValidityPeriod($value)
 * @method mixed getContractDocumentReference()
 * @method self setContractDocumentReference($value)
 * @method mixed getNominationPeriod()
 * @method self setNominationPeriod($value)
 * @method mixed getContractualDelivery()
 * @method self setContractualDelivery($value)
 */
class ContractType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cbc:IssueTime" => IssueTimeType::class,
        "cbc:NominationDate" => NominationDateType::class,
        "cbc:NominationTime" => NominationTimeType::class,
        "cbc:ContractTypeCode" => ContractTypeCodeType::class,
        "cbc:ContractType" => ContractTypeType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:VersionID" => VersionIDType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cac:ValidityPeriod" => PeriodType::class,
        "cac:ContractDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:NominationPeriod" => PeriodType::class,
        "cac:ContractualDelivery" => DeliveryType::class,
    ];

    protected $minOccurs = [
    ];
}