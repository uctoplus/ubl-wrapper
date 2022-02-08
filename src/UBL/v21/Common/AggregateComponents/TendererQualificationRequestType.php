<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompanyLegalFormCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompanyLegalFormType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PersonalSituationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OperatingYearsQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EmployeeQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ClassificationSchemeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\EvaluationCriterionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TendererRequirementType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\EconomicOperatorRoleType;

/**
 *
 * @method mixed getCompanyLegalFormCode()
 * @method self setCompanyLegalFormCode($value)
 * @method mixed getCompanyLegalForm()
 * @method self setCompanyLegalForm($value)
 * @method mixed getPersonalSituation()
 * @method self setPersonalSituation($value)
 * @method mixed getOperatingYearsQuantity()
 * @method self setOperatingYearsQuantity($value)
 * @method mixed getEmployeeQuantity()
 * @method self setEmployeeQuantity($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getRequiredBusinessClassificationScheme()
 * @method self setRequiredBusinessClassificationScheme($value)
 * @method mixed getTechnicalEvaluationCriterion()
 * @method self setTechnicalEvaluationCriterion($value)
 * @method mixed getFinancialEvaluationCriterion()
 * @method self setFinancialEvaluationCriterion($value)
 * @method mixed getSpecificTendererRequirement()
 * @method self setSpecificTendererRequirement($value)
 * @method mixed getEconomicOperatorRole()
 * @method self setEconomicOperatorRole($value)
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