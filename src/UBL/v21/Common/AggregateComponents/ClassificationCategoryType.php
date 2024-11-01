<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CodeValueType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;

/**
 * Class ClassificationCategoryType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method CodeValueType getCodeValue()
 * @method self setCodeValue(CodeValueType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method ClassificationCategoryType[] getCategorizesClassificationCategory()
 * @method self addCategorizesClassificationCategory(ClassificationCategoryType $value)
 * @method self setCategorizesClassificationCategory(ClassificationCategoryType ...$values)
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