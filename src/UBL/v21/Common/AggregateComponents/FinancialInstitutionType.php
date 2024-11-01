<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;

/**
 * Class FinancialInstitutionType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method AddressType getAddress()
 * @method self setAddress(AddressType $value)
 */
class FinancialInstitutionType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Name" => NameType::class,
        "cac:Address" => AddressType::class,
    ];

    protected $minOccurs = [
    ];
}