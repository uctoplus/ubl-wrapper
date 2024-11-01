<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BestBeforeDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ManufactureDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ManufactureTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProductTraceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegistrationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SerialIDType;

/**
 * Class ItemInstanceType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ProductTraceIDType getProductTraceID()
 * @method self setProductTraceID(ProductTraceIDType|string $value)
 * @method ManufactureDateType getManufactureDate()
 * @method self setManufactureDate(ManufactureDateType|string $value)
 * @method ManufactureTimeType getManufactureTime()
 * @method self setManufactureTime(ManufactureTimeType|string $value)
 * @method BestBeforeDateType getBestBeforeDate()
 * @method self setBestBeforeDate(BestBeforeDateType|string $value)
 * @method RegistrationIDType getRegistrationID()
 * @method self setRegistrationID(RegistrationIDType|string $value)
 * @method SerialIDType getSerialID()
 * @method self setSerialID(SerialIDType|string $value)
 * @method ItemPropertyType[] getAdditionalItemProperty()
 * @method self addAdditionalItemProperty(ItemPropertyType $value)
 * @method self setAdditionalItemProperty(ItemPropertyType ...$values)
 * @method LotIdentificationType getLotIdentification()
 * @method self setLotIdentification(LotIdentificationType $value)
 */
class ItemInstanceType extends AggregateComponent
{
    protected $casts = [
        "cbc:ProductTraceID" => ProductTraceIDType::class,
        "cbc:ManufactureDate" => ManufactureDateType::class,
        "cbc:ManufactureTime" => ManufactureTimeType::class,
        "cbc:BestBeforeDate" => BestBeforeDateType::class,
        "cbc:RegistrationID" => RegistrationIDType::class,
        "cbc:SerialID" => SerialIDType::class,
        "cac:AdditionalItemProperty" => ItemPropertyType::class . "[]",
        "cac:LotIdentification" => LotIdentificationType::class,
    ];

    protected $minOccurs = [
    ];
}