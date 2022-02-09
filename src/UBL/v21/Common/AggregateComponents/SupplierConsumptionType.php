<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;

/**
 * Class SupplierConsumptionType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method PartyType getUtilitySupplierParty()
 * @method self setUtilitySupplierParty(PartyType $value)
 * @method PartyType getUtilityCustomerParty()
 * @method self setUtilityCustomerParty(PartyType $value)
 * @method ConsumptionType getConsumption()
 * @method self setConsumption(ConsumptionType $value)
 * @method ContractType getContract()
 * @method self setContract(ContractType $value)
 * @method ConsumptionLineType getConsumptionLine()
 * @method self addConsumptionLine(ConsumptionLineType $value)
 * @method self setConsumptionLine(ConsumptionLineType ...$values)
 */
class SupplierConsumptionType extends AggregateComponent
{
    protected $casts = [
        "cbc:Description" => DescriptionType::class . "[]",
        "cac:UtilitySupplierParty" => PartyType::class,
        "cac:UtilityCustomerParty" => PartyType::class,
        "cac:Consumption" => ConsumptionType::class,
        "cac:Contract" => ContractType::class,
        "cac:ConsumptionLine" => ConsumptionLineType::class . "[]",
    ];

    protected $minOccurs = [
        "cac:Consumption" => 1,
        "cac:ConsumptionLine" => 1,
    ];
}