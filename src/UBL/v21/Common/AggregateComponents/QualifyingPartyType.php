<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BusinessClassificationEvidenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BusinessIdentityEvidenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EmployeeQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OperatingYearsQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ParticipationPercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PersonalSituationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TendererRoleCodeType;

/**
 * Class QualifyingPartyType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ParticipationPercentType getParticipationPercent()
 * @method self setParticipationPercent(ParticipationPercentType|string $value)
 * @method PersonalSituationType getPersonalSituation()
 * @method self addPersonalSituation(PersonalSituationType|string $value)
 * @method self setPersonalSituation(PersonalSituationType ...$values)
 * @method OperatingYearsQuantityType getOperatingYearsQuantity()
 * @method self setOperatingYearsQuantity(OperatingYearsQuantityType|string $value)
 * @method EmployeeQuantityType getEmployeeQuantity()
 * @method self setEmployeeQuantity(EmployeeQuantityType|string $value)
 * @method BusinessClassificationEvidenceIDType getBusinessClassificationEvidenceID()
 * @method self setBusinessClassificationEvidenceID(BusinessClassificationEvidenceIDType|string $value)
 * @method BusinessIdentityEvidenceIDType getBusinessIdentityEvidenceID()
 * @method self setBusinessIdentityEvidenceID(BusinessIdentityEvidenceIDType|string $value)
 * @method TendererRoleCodeType getTendererRoleCode()
 * @method self setTendererRoleCode(TendererRoleCodeType|string $value)
 * @method ClassificationSchemeType getBusinessClassificationScheme()
 * @method self setBusinessClassificationScheme(ClassificationSchemeType $value)
 * @method CapabilityType getTechnicalCapability()
 * @method self addTechnicalCapability(CapabilityType $value)
 * @method self setTechnicalCapability(CapabilityType ...$values)
 * @method CapabilityType getFinancialCapability()
 * @method self addFinancialCapability(CapabilityType $value)
 * @method self setFinancialCapability(CapabilityType ...$values)
 * @method CompletedTaskType getCompletedTask()
 * @method self addCompletedTask(CompletedTaskType $value)
 * @method self setCompletedTask(CompletedTaskType ...$values)
 * @method DeclarationType getDeclaration()
 * @method self addDeclaration(DeclarationType $value)
 * @method self setDeclaration(DeclarationType ...$values)
 * @method PartyType getParty()
 * @method self setParty(PartyType $value)
 * @method EconomicOperatorRoleType getEconomicOperatorRole()
 * @method self setEconomicOperatorRole(EconomicOperatorRoleType $value)
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