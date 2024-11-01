<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ImportanceCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;

/**
 * Class ItemPropertyGroupType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method ImportanceCodeType getImportanceCode()
 * @method self setImportanceCode(ImportanceCodeType|string $value)
 */
class ItemPropertyGroupType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Name" => NameType::class,
        "cbc:ImportanceCode" => ImportanceCodeType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}