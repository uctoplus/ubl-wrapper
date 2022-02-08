<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CodeValueType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;

/**
 *
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getCodeValue()
 * @method self setCodeValue($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getCategorizesClassificationCategory()
 * @method self setCategorizesClassificationCategory($value)
 */
class ClassificationCategoryType extends AggregateComponent
{
    protected $casts = [
        "cbc:Name" => NameType::class,
        "cbc:CodeValue" => CodeValueType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cac:CategorizesClassificationCategory" => ClassificationCategoryType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}