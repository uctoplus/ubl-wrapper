<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContractTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContractTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NominationDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NominationTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VersionIDType;

/**
 * Class ContractType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method IssueDateType getIssueDate()
 * @method self setIssueDate(IssueDateType|string $value)
 * @method IssueTimeType getIssueTime()
 * @method self setIssueTime(IssueTimeType|string $value)
 * @method NominationDateType getNominationDate()
 * @method self setNominationDate(NominationDateType|string $value)
 * @method NominationTimeType getNominationTime()
 * @method self setNominationTime(NominationTimeType|string $value)
 * @method ContractTypeCodeType getContractTypeCode()
 * @method self setContractTypeCode(ContractTypeCodeType|string $value)
 * @method ContractTypeType getContractType()
 * @method self setContractType(ContractTypeType|string $value)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method VersionIDType getVersionID()
 * @method self setVersionID(VersionIDType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method PeriodType getValidityPeriod()
 * @method self setValidityPeriod(PeriodType $value)
 * @method DocumentReferenceType[] getContractDocumentReference()
 * @method self addContractDocumentReference(DocumentReferenceType $value)
 * @method self setContractDocumentReference(DocumentReferenceType ...$values)
 * @method PeriodType getNominationPeriod()
 * @method self setNominationPeriod(PeriodType $value)
 * @method DeliveryType getContractualDelivery()
 * @method self setContractualDelivery(DeliveryType $value)
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