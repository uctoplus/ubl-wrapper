<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CargoTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CommodityCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ItemClassificationCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NatureCodeType;

/**
 * Class CommodityClassificationType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method NatureCodeType getNatureCode()
 * @method self setNatureCode(NatureCodeType|string $value)
 * @method CargoTypeCodeType getCargoTypeCode()
 * @method self setCargoTypeCode(CargoTypeCodeType|string $value)
 * @method CommodityCodeType getCommodityCode()
 * @method self setCommodityCode(CommodityCodeType|string $value)
 * @method ItemClassificationCodeType getItemClassificationCode()
 * @method self setItemClassificationCode(ItemClassificationCodeType|string $value)
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