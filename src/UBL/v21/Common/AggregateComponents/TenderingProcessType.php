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
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getOriginalContractingSystemID()
 * @method self setOriginalContractingSystemID($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getNegotiationDescription()
 * @method self addNegotiationDescription($value)
 * @method self setNegotiationDescription($value)
 * @method mixed getProcedureCode()
 * @method self setProcedureCode($value)
 * @method mixed getUrgencyCode()
 * @method self setUrgencyCode($value)
 * @method mixed getExpenseCode()
 * @method self setExpenseCode($value)
 * @method mixed getPartPresentationCode()
 * @method self setPartPresentationCode($value)
 * @method mixed getContractingSystemCode()
 * @method self setContractingSystemCode($value)
 * @method mixed getSubmissionMethodCode()
 * @method self setSubmissionMethodCode($value)
 * @method mixed getCandidateReductionConstraintIndicator()
 * @method self setCandidateReductionConstraintIndicator($value)
 * @method mixed getGovernmentAgreementConstraintIndicator()
 * @method self setGovernmentAgreementConstraintIndicator($value)
 * @method mixed getDocumentAvailabilityPeriod()
 * @method self setDocumentAvailabilityPeriod($value)
 * @method mixed getTenderSubmissionDeadlinePeriod()
 * @method self setTenderSubmissionDeadlinePeriod($value)
 * @method mixed getInvitationSubmissionPeriod()
 * @method self setInvitationSubmissionPeriod($value)
 * @method mixed getParticipationRequestReceptionPeriod()
 * @method self setParticipationRequestReceptionPeriod($value)
 * @method mixed getNoticeDocumentReference()
 * @method self addNoticeDocumentReference($value)
 * @method self setNoticeDocumentReference($value)
 * @method mixed getAdditionalDocumentReference()
 * @method self addAdditionalDocumentReference($value)
 * @method self setAdditionalDocumentReference($value)
 * @method mixed getProcessJustification()
 * @method self addProcessJustification($value)
 * @method self setProcessJustification($value)
 * @method mixed getEconomicOperatorShortList()
 * @method self setEconomicOperatorShortList($value)
 * @method mixed getOpenTenderEvent()
 * @method self addOpenTenderEvent($value)
 * @method self setOpenTenderEvent($value)
 * @method mixed getAuctionTerms()
 * @method self setAuctionTerms($value)
 * @method mixed getFrameworkAgreement()
 * @method self setFrameworkAgreement($value)
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