<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\FinancialInstitutionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AddressType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getFinancialInstitution()
 * @method self setFinancialInstitution($value)
 * @method mixed getAddress()
 * @method self setAddress($value)
 */
class BranchType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Name" => NameType::class,
        "cac:FinancialInstitution" => FinancialInstitutionType::class,
        "cac:Address" => AddressType::class,
    ];

    protected $minOccurs = [
    ];
}