<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExecutionRequirementCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;

/**
 *
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getExecutionRequirementCode()
 * @method self setExecutionRequirementCode($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 */
class ContractExecutionRequirementType extends AggregateComponent
{
    protected $casts = [
        "cbc:Name" => NameType::class . "[]",
        "cbc:ExecutionRequirementCode" => ExecutionRequirementCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}