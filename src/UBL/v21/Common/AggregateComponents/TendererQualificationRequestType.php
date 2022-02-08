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
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getCompanyLegalFormCode()
 * @method self setCompanyLegalFormCode($value)
 * @method mixed getCompanyLegalForm()
 * @method self setCompanyLegalForm($value)
 * @method mixed getPersonalSituation()
 * @method self addPersonalSituation($value)
 * @method self setPersonalSituation($value)
 * @method mixed getOperatingYearsQuantity()
 * @method self setOperatingYearsQuantity($value)
 * @method mixed getEmployeeQuantity()
 * @method self setEmployeeQuantity($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getRequiredBusinessClassificationScheme()
 * @method self addRequiredBusinessClassificationScheme($value)
 * @method self setRequiredBusinessClassificationScheme($value)
 * @method mixed getTechnicalEvaluationCriterion()
 * @method self addTechnicalEvaluationCriterion($value)
 * @method self setTechnicalEvaluationCriterion($value)
 * @method mixed getFinancialEvaluationCriterion()
 * @method self addFinancialEvaluationCriterion($value)
 * @method self setFinancialEvaluationCriterion($value)
 * @method mixed getSpecificTendererRequirement()
 * @method self addSpecificTendererRequirement($value)
 * @method self setSpecificTendererRequirement($value)
 * @method mixed getEconomicOperatorRole()
 * @method self addEconomicOperatorRole($value)
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