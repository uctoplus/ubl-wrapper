<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AcceptedVariantsDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AdditionalConditionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AwardingMethodTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DocumentationFeeAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EconomicOperatorRegistryURIType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FundingProgramCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FundingProgramType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestSecurityClearanceDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumAdvertisementAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumVariantQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OtherConditionsIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentFrequencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriceEvaluationCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriceRevisionFormulaDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequiredCurriculaIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VariantConstraintIndicatorType;

/**
 * Class TenderingTermsType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getAwardingMethodTypeCode()
 * @method self setAwardingMethodTypeCode($value)
 * @method mixed getPriceEvaluationCode()
 * @method self setPriceEvaluationCode($value)
 * @method mixed getMaximumVariantQuantity()
 * @method self setMaximumVariantQuantity($value)
 * @method mixed getVariantConstraintIndicator()
 * @method self setVariantConstraintIndicator($value)
 * @method mixed getAcceptedVariantsDescription()
 * @method self addAcceptedVariantsDescription($value)
 * @method self setAcceptedVariantsDescription($value)
 * @method mixed getPriceRevisionFormulaDescription()
 * @method self addPriceRevisionFormulaDescription($value)
 * @method self setPriceRevisionFormulaDescription($value)
 * @method mixed getFundingProgramCode()
 * @method self setFundingProgramCode($value)
 * @method mixed getFundingProgram()
 * @method self addFundingProgram($value)
 * @method self setFundingProgram($value)
 * @method mixed getMaximumAdvertisementAmount()
 * @method self setMaximumAdvertisementAmount($value)
 * @method mixed getNote()
 * @method self addNote($value)
 * @method self setNote($value)
 * @method mixed getPaymentFrequencyCode()
 * @method self setPaymentFrequencyCode($value)
 * @method mixed getEconomicOperatorRegistryURI()
 * @method self setEconomicOperatorRegistryURI($value)
 * @method mixed getRequiredCurriculaIndicator()
 * @method self setRequiredCurriculaIndicator($value)
 * @method mixed getOtherConditionsIndicator()
 * @method self setOtherConditionsIndicator($value)
 * @method mixed getAdditionalConditions()
 * @method self addAdditionalConditions($value)
 * @method self setAdditionalConditions($value)
 * @method mixed getLatestSecurityClearanceDate()
 * @method self setLatestSecurityClearanceDate($value)
 * @method mixed getDocumentationFeeAmount()
 * @method self setDocumentationFeeAmount($value)
 * @method mixed getPenaltyClause()
 * @method self addPenaltyClause($value)
 * @method self setPenaltyClause($value)
 * @method mixed getRequiredFinancialGuarantee()
 * @method self addRequiredFinancialGuarantee($value)
 * @method self setRequiredFinancialGuarantee($value)
 * @method mixed getProcurementLegislationDocumentReference()
 * @method self setProcurementLegislationDocumentReference($value)
 * @method mixed getFiscalLegislationDocumentReference()
 * @method self setFiscalLegislationDocumentReference($value)
 * @method mixed getEnvironmentalLegislationDocumentReference()
 * @method self setEnvironmentalLegislationDocumentReference($value)
 * @method mixed getEmploymentLegislationDocumentReference()
 * @method self setEmploymentLegislationDocumentReference($value)
 * @method mixed getContractualDocumentReference()
 * @method self addContractualDocumentReference($value)
 * @method self setContractualDocumentReference($value)
 * @method mixed getCallForTendersDocumentReference()
 * @method self setCallForTendersDocumentReference($value)
 * @method mixed getWarrantyValidityPeriod()
 * @method self setWarrantyValidityPeriod($value)
 * @method mixed getPaymentTerms()
 * @method self addPaymentTerms($value)
 * @method self setPaymentTerms($value)
 * @method mixed getTendererQualificationRequest()
 * @method self addTendererQualificationRequest($value)
 * @method self setTendererQualificationRequest($value)
 * @method mixed getAllowedSubcontractTerms()
 * @method self addAllowedSubcontractTerms($value)
 * @method self setAllowedSubcontractTerms($value)
 * @method mixed getTenderPreparation()
 * @method self addTenderPreparation($value)
 * @method self setTenderPreparation($value)
 * @method mixed getContractExecutionRequirement()
 * @method self addContractExecutionRequirement($value)
 * @method self setContractExecutionRequirement($value)
 * @method mixed getAwardingTerms()
 * @method self setAwardingTerms($value)
 * @method mixed getAdditionalInformationParty()
 * @method self setAdditionalInformationParty($value)
 * @method mixed getDocumentProviderParty()
 * @method self setDocumentProviderParty($value)
 * @method mixed getTenderRecipientParty()
 * @method self setTenderRecipientParty($value)
 * @method mixed getContractResponsibleParty()
 * @method self setContractResponsibleParty($value)
 * @method mixed getTenderEvaluationParty()
 * @method self addTenderEvaluationParty($value)
 * @method self setTenderEvaluationParty($value)
 * @method mixed getTenderValidityPeriod()
 * @method self setTenderValidityPeriod($value)
 * @method mixed getContractAcceptancePeriod()
 * @method self setContractAcceptancePeriod($value)
 * @method mixed getAppealTerms()
 * @method self setAppealTerms($value)
 * @method mixed getLanguage()
 * @method self addLanguage($value)
 * @method self setLanguage($value)
 * @method mixed getBudgetAccountLine()
 * @method self addBudgetAccountLine($value)
 * @method self setBudgetAccountLine($value)
 * @method mixed getReplacedNoticeDocumentReference()
 * @method self setReplacedNoticeDocumentReference($value)
 */
class TenderingTermsType extends AggregateComponent
{
    protected $casts = [
        "cbc:AwardingMethodTypeCode" => AwardingMethodTypeCodeType::class,
        "cbc:PriceEvaluationCode" => PriceEvaluationCodeType::class,
        "cbc:MaximumVariantQuantity" => MaximumVariantQuantityType::class,
        "cbc:VariantConstraintIndicator" => VariantConstraintIndicatorType::class,
        "cbc:AcceptedVariantsDescription" => AcceptedVariantsDescriptionType::class . "[]",
        "cbc:PriceRevisionFormulaDescription" => PriceRevisionFormulaDescriptionType::class . "[]",
        "cbc:FundingProgramCode" => FundingProgramCodeType::class,
        "cbc:FundingProgram" => FundingProgramType::class . "[]",
        "cbc:MaximumAdvertisementAmount" => MaximumAdvertisementAmountType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:PaymentFrequencyCode" => PaymentFrequencyCodeType::class,
        "cbc:EconomicOperatorRegistryURI" => EconomicOperatorRegistryURIType::class,
        "cbc:RequiredCurriculaIndicator" => RequiredCurriculaIndicatorType::class,
        "cbc:OtherConditionsIndicator" => OtherConditionsIndicatorType::class,
        "cbc:AdditionalConditions" => AdditionalConditionsType::class . "[]",
        "cbc:LatestSecurityClearanceDate" => LatestSecurityClearanceDateType::class,
        "cbc:DocumentationFeeAmount" => DocumentationFeeAmountType::class,
        "cac:PenaltyClause" => ClauseType::class . "[]",
        "cac:RequiredFinancialGuarantee" => FinancialGuaranteeType::class . "[]",
        "cac:ProcurementLegislationDocumentReference" => DocumentReferenceType::class,
        "cac:FiscalLegislationDocumentReference" => DocumentReferenceType::class,
        "cac:EnvironmentalLegislationDocumentReference" => DocumentReferenceType::class,
        "cac:EmploymentLegislationDocumentReference" => DocumentReferenceType::class,
        "cac:ContractualDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:CallForTendersDocumentReference" => DocumentReferenceType::class,
        "cac:WarrantyValidityPeriod" => PeriodType::class,
        "cac:PaymentTerms" => PaymentTermsType::class . "[]",
        "cac:TendererQualificationRequest" => TendererQualificationRequestType::class . "[]",
        "cac:AllowedSubcontractTerms" => SubcontractTermsType::class . "[]",
        "cac:TenderPreparation" => TenderPreparationType::class . "[]",
        "cac:ContractExecutionRequirement" => ContractExecutionRequirementType::class . "[]",
        "cac:AwardingTerms" => AwardingTermsType::class,
        "cac:AdditionalInformationParty" => PartyType::class,
        "cac:DocumentProviderParty" => PartyType::class,
        "cac:TenderRecipientParty" => PartyType::class,
        "cac:ContractResponsibleParty" => PartyType::class,
        "cac:TenderEvaluationParty" => PartyType::class . "[]",
        "cac:TenderValidityPeriod" => PeriodType::class,
        "cac:ContractAcceptancePeriod" => PeriodType::class,
        "cac:AppealTerms" => AppealTermsType::class,
        "cac:Language" => LanguageType::class . "[]",
        "cac:BudgetAccountLine" => BudgetAccountLineType::class . "[]",
        "cac:ReplacedNoticeDocumentReference" => DocumentReferenceType::class,
    ];

    protected $minOccurs = [
    ];
}