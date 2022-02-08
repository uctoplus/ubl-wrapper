<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ParticipationPercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PersonalSituationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OperatingYearsQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EmployeeQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BusinessClassificationEvidenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BusinessIdentityEvidenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TendererRoleCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ClassificationSchemeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CapabilityType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CompletedTaskType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeclarationType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\EconomicOperatorRoleType;

/**
 *
 * @method mixed getParticipationPercent()
 * @method self setParticipationPercent($value)
 * @method mixed getPersonalSituation()
 * @method self setPersonalSituation($value)
 * @method mixed getOperatingYearsQuantity()
 * @method self setOperatingYearsQuantity($value)
 * @method mixed getEmployeeQuantity()
 * @method self setEmployeeQuantity($value)
 * @method mixed getBusinessClassificationEvidenceID()
 * @method self setBusinessClassificationEvidenceID($value)
 * @method mixed getBusinessIdentityEvidenceID()
 * @method self setBusinessIdentityEvidenceID($value)
 * @method mixed getTendererRoleCode()
 * @method self setTendererRoleCode($value)
 * @method mixed getBusinessClassificationScheme()
 * @method self setBusinessClassificationScheme($value)
 * @method mixed getTechnicalCapability()
 * @method self setTechnicalCapability($value)
 * @method mixed getFinancialCapability()
 * @method self setFinancialCapability($value)
 * @method mixed getCompletedTask()
 * @method self setCompletedTask($value)
 * @method mixed getDeclaration()
 * @method self setDeclaration($value)
 * @method mixed getParty()
 * @method self setParty($value)
 * @method mixed getEconomicOperatorRole()
 * @method self setEconomicOperatorRole($value)
 */
class QualifyingPartyType extends AggregateComponent
{
    protected $casts = [
        "cbc:ParticipationPercent" => ParticipationPercentType::class,
        "cbc:PersonalSituation" => PersonalSituationType::class . "[]",
        "cbc:OperatingYearsQuantity" => OperatingYearsQuantityType::class,
        "cbc:EmployeeQuantity" => EmployeeQuantityType::class,
        "cbc:BusinessClassificationEvidenceID" => BusinessClassificationEvidenceIDType::class,
        "cbc:BusinessIdentityEvidenceID" => BusinessIdentityEvidenceIDType::class,
        "cbc:TendererRoleCode" => TendererRoleCodeType::class,
        "cac:BusinessClassificationScheme" => ClassificationSchemeType::class,
        "cac:TechnicalCapability" => CapabilityType::class . "[]",
        "cac:FinancialCapability" => CapabilityType::class . "[]",
        "cac:CompletedTask" => CompletedTaskType::class . "[]",
        "cac:Declaration" => DeclarationType::class . "[]",
        "cac:Party" => PartyType::class,
        "cac:EconomicOperatorRole" => EconomicOperatorRoleType::class,
    ];

    protected $minOccurs = [
    ];
}