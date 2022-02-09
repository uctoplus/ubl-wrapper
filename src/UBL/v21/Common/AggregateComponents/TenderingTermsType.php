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
 * @method AwardingMethodTypeCodeType getAwardingMethodTypeCode()
 * @method self setAwardingMethodTypeCode(AwardingMethodTypeCodeType|string $value)
 * @method PriceEvaluationCodeType getPriceEvaluationCode()
 * @method self setPriceEvaluationCode(PriceEvaluationCodeType|string $value)
 * @method MaximumVariantQuantityType getMaximumVariantQuantity()
 * @method self setMaximumVariantQuantity(MaximumVariantQuantityType|string $value)
 * @method VariantConstraintIndicatorType getVariantConstraintIndicator()
 * @method self setVariantConstraintIndicator(VariantConstraintIndicatorType|string $value)
 * @method AcceptedVariantsDescriptionType getAcceptedVariantsDescription()
 * @method self addAcceptedVariantsDescription(AcceptedVariantsDescriptionType|string $value)
 * @method self setAcceptedVariantsDescription(AcceptedVariantsDescriptionType ...$values)
 * @method PriceRevisionFormulaDescriptionType getPriceRevisionFormulaDescription()
 * @method self addPriceRevisionFormulaDescription(PriceRevisionFormulaDescriptionType|string $value)
 * @method self setPriceRevisionFormulaDescription(PriceRevisionFormulaDescriptionType ...$values)
 * @method FundingProgramCodeType getFundingProgramCode()
 * @method self setFundingProgramCode(FundingProgramCodeType|string $value)
 * @method FundingProgramType getFundingProgram()
 * @method self addFundingProgram(FundingProgramType|string $value)
 * @method self setFundingProgram(FundingProgramType ...$values)
 * @method MaximumAdvertisementAmountType getMaximumAdvertisementAmount()
 * @method self setMaximumAdvertisementAmount(MaximumAdvertisementAmountType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method PaymentFrequencyCodeType getPaymentFrequencyCode()
 * @method self setPaymentFrequencyCode(PaymentFrequencyCodeType|string $value)
 * @method EconomicOperatorRegistryURIType getEconomicOperatorRegistryURI()
 * @method self setEconomicOperatorRegistryURI(EconomicOperatorRegistryURIType|string $value)
 * @method RequiredCurriculaIndicatorType getRequiredCurriculaIndicator()
 * @method self setRequiredCurriculaIndicator(RequiredCurriculaIndicatorType|string $value)
 * @method OtherConditionsIndicatorType getOtherConditionsIndicator()
 * @method self setOtherConditionsIndicator(OtherConditionsIndicatorType|string $value)
 * @method AdditionalConditionsType getAdditionalConditions()
 * @method self addAdditionalConditions(AdditionalConditionsType|string $value)
 * @method self setAdditionalConditions(AdditionalConditionsType ...$values)
 * @method LatestSecurityClearanceDateType getLatestSecurityClearanceDate()
 * @method self setLatestSecurityClearanceDate(LatestSecurityClearanceDateType|string $value)
 * @method DocumentationFeeAmountType getDocumentationFeeAmount()
 * @method self setDocumentationFeeAmount(DocumentationFeeAmountType|string $value)
 * @method ClauseType getPenaltyClause()
 * @method self addPenaltyClause(ClauseType $value)
 * @method self setPenaltyClause(ClauseType ...$values)
 * @method FinancialGuaranteeType getRequiredFinancialGuarantee()
 * @method self addRequiredFinancialGuarantee(FinancialGuaranteeType $value)
 * @method self setRequiredFinancialGuarantee(FinancialGuaranteeType ...$values)
 * @method DocumentReferenceType getProcurementLegislationDocumentReference()
 * @method self setProcurementLegislationDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType getFiscalLegislationDocumentReference()
 * @method self setFiscalLegislationDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType getEnvironmentalLegislationDocumentReference()
 * @method self setEnvironmentalLegislationDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType getEmploymentLegislationDocumentReference()
 * @method self setEmploymentLegislationDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType getContractualDocumentReference()
 * @method self addContractualDocumentReference(DocumentReferenceType $value)
 * @method self setContractualDocumentReference(DocumentReferenceType ...$values)
 * @method DocumentReferenceType getCallForTendersDocumentReference()
 * @method self setCallForTendersDocumentReference(DocumentReferenceType $value)
 * @method PeriodType getWarrantyValidityPeriod()
 * @method self setWarrantyValidityPeriod(PeriodType $value)
 * @method PaymentTermsType getPaymentTerms()
 * @method self addPaymentTerms(PaymentTermsType $value)
 * @method self setPaymentTerms(PaymentTermsType ...$values)
 * @method TendererQualificationRequestType getTendererQualificationRequest()
 * @method self addTendererQualificationRequest(TendererQualificationRequestType $value)
 * @method self setTendererQualificationRequest(TendererQualificationRequestType ...$values)
 * @method SubcontractTermsType getAllowedSubcontractTerms()
 * @method self addAllowedSubcontractTerms(SubcontractTermsType $value)
 * @method self setAllowedSubcontractTerms(SubcontractTermsType ...$values)
 * @method TenderPreparationType getTenderPreparation()
 * @method self addTenderPreparation(TenderPreparationType $value)
 * @method self setTenderPreparation(TenderPreparationType ...$values)
 * @method ContractExecutionRequirementType getContractExecutionRequirement()
 * @method self addContractExecutionRequirement(ContractExecutionRequirementType $value)
 * @method self setContractExecutionRequirement(ContractExecutionRequirementType ...$values)
 * @method AwardingTermsType getAwardingTerms()
 * @method self setAwardingTerms(AwardingTermsType $value)
 * @method PartyType getAdditionalInformationParty()
 * @method self setAdditionalInformationParty(PartyType $value)
 * @method PartyType getDocumentProviderParty()
 * @method self setDocumentProviderParty(PartyType $value)
 * @method PartyType getTenderRecipientParty()
 * @method self setTenderRecipientParty(PartyType $value)
 * @method PartyType getContractResponsibleParty()
 * @method self setContractResponsibleParty(PartyType $value)
 * @method PartyType getTenderEvaluationParty()
 * @method self addTenderEvaluationParty(PartyType $value)
 * @method self setTenderEvaluationParty(PartyType ...$values)
 * @method PeriodType getTenderValidityPeriod()
 * @method self setTenderValidityPeriod(PeriodType $value)
 * @method PeriodType getContractAcceptancePeriod()
 * @method self setContractAcceptancePeriod(PeriodType $value)
 * @method AppealTermsType getAppealTerms()
 * @method self setAppealTerms(AppealTermsType $value)
 * @method LanguageType getLanguage()
 * @method self addLanguage(LanguageType $value)
 * @method self setLanguage(LanguageType ...$values)
 * @method BudgetAccountLineType getBudgetAccountLine()
 * @method self addBudgetAccountLine(BudgetAccountLineType $value)
 * @method self setBudgetAccountLine(BudgetAccountLineType ...$values)
 * @method DocumentReferenceType getReplacedNoticeDocumentReference()
 * @method self setReplacedNoticeDocumentReference(DocumentReferenceType $value)
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