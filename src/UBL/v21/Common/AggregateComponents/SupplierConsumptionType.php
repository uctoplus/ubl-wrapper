<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ConsumptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ContractType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ConsumptionLineType;

/**
 *
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getUtilitySupplierParty()
 * @method self setUtilitySupplierParty($value)
 * @method mixed getUtilityCustomerParty()
 * @method self setUtilityCustomerParty($value)
 * @method mixed getConsumption()
 * @method self setConsumption($value)
 * @method mixed getContract()
 * @method self setContract($value)
 * @method mixed getConsumptionLine()
 * @method self setConsumptionLine($value)
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