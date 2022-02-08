<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NatureCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CargoTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CommodityCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ItemClassificationCodeType;

/**
 *
 * @method mixed getNatureCode()
 * @method self setNatureCode($value)
 * @method mixed getCargoTypeCode()
 * @method self setCargoTypeCode($value)
 * @method mixed getCommodityCode()
 * @method self setCommodityCode($value)
 * @method mixed getItemClassificationCode()
 * @method self setItemClassificationCode($value)
 */
class CommodityClassificationType extends AggregateComponent
{
    protected $casts = [
        "cbc:NatureCode" => NatureCodeType::class,
        "cbc:CargoTypeCode" => CargoTypeCodeType::class,
        "cbc:CommodityCode" => CommodityCodeType::class,
        "cbc:ItemClassificationCode" => ItemClassificationCodeType::class,
    ];

    protected $minOccurs = [
    ];
}