<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CodeValueType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;

/**
 * Class ClassificationCategoryType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getCodeValue()
 * @method self setCodeValue($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getCategorizesClassificationCategory()
 * @method self addCategorizesClassificationCategory($value)
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