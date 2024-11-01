<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompanyLegalFormCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompanyLegalFormType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EmployeeQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OperatingYearsQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PersonalSituationType;

/**
 * Class TendererQualificationRequestType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method CompanyLegalFormCodeType getCompanyLegalFormCode()
 * @method self setCompanyLegalFormCode(CompanyLegalFormCodeType|string $value)
 * @method CompanyLegalFormType getCompanyLegalForm()
 * @method self setCompanyLegalForm(CompanyLegalFormType|string $value)
 * @method PersonalSituationType[] getPersonalSituation()
 * @method self addPersonalSituation(PersonalSituationType|string $value)
 * @method self setPersonalSituation(PersonalSituationType ...$values)
 * @method OperatingYearsQuantityType getOperatingYearsQuantity()
 * @method self setOperatingYearsQuantity(OperatingYearsQuantityType|string $value)
 * @method EmployeeQuantityType getEmployeeQuantity()
 * @method self setEmployeeQuantity(EmployeeQuantityType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method ClassificationSchemeType[] getRequiredBusinessClassificationScheme()
 * @method self addRequiredBusinessClassificationScheme(ClassificationSchemeType $value)
 * @method self setRequiredBusinessClassificationScheme(ClassificationSchemeType ...$values)
 * @method EvaluationCriterionType[] getTechnicalEvaluationCriterion()
 * @method self addTechnicalEvaluationCriterion(EvaluationCriterionType $value)
 * @method self setTechnicalEvaluationCriterion(EvaluationCriterionType ...$values)
 * @method EvaluationCriterionType[] getFinancialEvaluationCriterion()
 * @method self addFinancialEvaluationCriterion(EvaluationCriterionType $value)
 * @method self setFinancialEvaluationCriterion(EvaluationCriterionType ...$values)
 * @method TendererRequirementType[] getSpecificTendererRequirement()
 * @method self addSpecificTendererRequirement(TendererRequirementType $value)
 * @method self setSpecificTendererRequirement(TendererRequirementType ...$values)
 * @method EconomicOperatorRoleType[] getEconomicOperatorRole()
 * @method self addEconomicOperatorRole(EconomicOperatorRoleType $value)
 * @method self setEconomicOperatorRole(EconomicOperatorRoleType ...$values)
 */
class TendererQualificationRequestType extends AggregateComponent
{
    protected $casts = [
        "cbc:CompanyLegalFormCode" => CompanyLegalFormCodeType::class,
        "cbc:CompanyLegalForm" => CompanyLegalFormType::class,
        "cbc:PersonalSituation" => PersonalSituationType::class . "[]",
        "cbc:OperatingYearsQuantity" => OperatingYearsQuantityType::class,
        "cbc:EmployeeQuantity" => EmployeeQuantityType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cac:RequiredBusinessClassificationScheme" => ClassificationSchemeType::class . "[]",
        "cac:TechnicalEvaluationCriterion" => EvaluationCriterionType::class . "[]",
        "cac:FinancialEvaluationCriterion" => EvaluationCriterionType::class . "[]",
        "cac:SpecificTendererRequirement" => TendererRequirementType::class . "[]",
        "cac:EconomicOperatorRole" => EconomicOperatorRoleType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}