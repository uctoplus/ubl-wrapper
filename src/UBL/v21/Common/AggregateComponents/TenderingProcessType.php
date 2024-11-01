<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CandidateReductionConstraintIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContractingSystemCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExpenseCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GovernmentAgreementConstraintIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NegotiationDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OriginalContractingSystemIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PartPresentationCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProcedureCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SubmissionMethodCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UrgencyCodeType;

/**
 * Class TenderingProcessType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method OriginalContractingSystemIDType getOriginalContractingSystemID()
 * @method self setOriginalContractingSystemID(OriginalContractingSystemIDType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method NegotiationDescriptionType[] getNegotiationDescription()
 * @method self addNegotiationDescription(NegotiationDescriptionType|string $value)
 * @method self setNegotiationDescription(NegotiationDescriptionType ...$values)
 * @method ProcedureCodeType getProcedureCode()
 * @method self setProcedureCode(ProcedureCodeType|string $value)
 * @method UrgencyCodeType getUrgencyCode()
 * @method self setUrgencyCode(UrgencyCodeType|string $value)
 * @method ExpenseCodeType getExpenseCode()
 * @method self setExpenseCode(ExpenseCodeType|string $value)
 * @method PartPresentationCodeType getPartPresentationCode()
 * @method self setPartPresentationCode(PartPresentationCodeType|string $value)
 * @method ContractingSystemCodeType getContractingSystemCode()
 * @method self setContractingSystemCode(ContractingSystemCodeType|string $value)
 * @method SubmissionMethodCodeType getSubmissionMethodCode()
 * @method self setSubmissionMethodCode(SubmissionMethodCodeType|string $value)
 * @method CandidateReductionConstraintIndicatorType getCandidateReductionConstraintIndicator()
 * @method self setCandidateReductionConstraintIndicator(CandidateReductionConstraintIndicatorType|string $value)
 * @method GovernmentAgreementConstraintIndicatorType getGovernmentAgreementConstraintIndicator()
 * @method self setGovernmentAgreementConstraintIndicator(GovernmentAgreementConstraintIndicatorType|string $value)
 * @method PeriodType getDocumentAvailabilityPeriod()
 * @method self setDocumentAvailabilityPeriod(PeriodType $value)
 * @method PeriodType getTenderSubmissionDeadlinePeriod()
 * @method self setTenderSubmissionDeadlinePeriod(PeriodType $value)
 * @method PeriodType getInvitationSubmissionPeriod()
 * @method self setInvitationSubmissionPeriod(PeriodType $value)
 * @method PeriodType getParticipationRequestReceptionPeriod()
 * @method self setParticipationRequestReceptionPeriod(PeriodType $value)
 * @method DocumentReferenceType[] getNoticeDocumentReference()
 * @method self addNoticeDocumentReference(DocumentReferenceType $value)
 * @method self setNoticeDocumentReference(DocumentReferenceType ...$values)
 * @method DocumentReferenceType[] getAdditionalDocumentReference()
 * @method self addAdditionalDocumentReference(DocumentReferenceType $value)
 * @method self setAdditionalDocumentReference(DocumentReferenceType ...$values)
 * @method ProcessJustificationType[] getProcessJustification()
 * @method self addProcessJustification(ProcessJustificationType $value)
 * @method self setProcessJustification(ProcessJustificationType ...$values)
 * @method EconomicOperatorShortListType getEconomicOperatorShortList()
 * @method self setEconomicOperatorShortList(EconomicOperatorShortListType $value)
 * @method EventType[] getOpenTenderEvent()
 * @method self addOpenTenderEvent(EventType $value)
 * @method self setOpenTenderEvent(EventType ...$values)
 * @method AuctionTermsType getAuctionTerms()
 * @method self setAuctionTerms(AuctionTermsType $value)
 * @method FrameworkAgreementType getFrameworkAgreement()
 * @method self setFrameworkAgreement(FrameworkAgreementType $value)
 */
class TenderingProcessType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:OriginalContractingSystemID" => OriginalContractingSystemIDType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:NegotiationDescription" => NegotiationDescriptionType::class . "[]",
        "cbc:ProcedureCode" => ProcedureCodeType::class,
        "cbc:UrgencyCode" => UrgencyCodeType::class,
        "cbc:ExpenseCode" => ExpenseCodeType::class,
        "cbc:PartPresentationCode" => PartPresentationCodeType::class,
        "cbc:ContractingSystemCode" => ContractingSystemCodeType::class,
        "cbc:SubmissionMethodCode" => SubmissionMethodCodeType::class,
        "cbc:CandidateReductionConstraintIndicator" => CandidateReductionConstraintIndicatorType::class,
        "cbc:GovernmentAgreementConstraintIndicator" => GovernmentAgreementConstraintIndicatorType::class,
        "cac:DocumentAvailabilityPeriod" => PeriodType::class,
        "cac:TenderSubmissionDeadlinePeriod" => PeriodType::class,
        "cac:InvitationSubmissionPeriod" => PeriodType::class,
        "cac:ParticipationRequestReceptionPeriod" => PeriodType::class,
        "cac:NoticeDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:AdditionalDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:ProcessJustification" => ProcessJustificationType::class . "[]",
        "cac:EconomicOperatorShortList" => EconomicOperatorShortListType::class,
        "cac:OpenTenderEvent" => EventType::class . "[]",
        "cac:AuctionTerms" => AuctionTermsType::class,
        "cac:FrameworkAgreement" => FrameworkAgreementType::class,
    ];

    protected $minOccurs = [
    ];
}