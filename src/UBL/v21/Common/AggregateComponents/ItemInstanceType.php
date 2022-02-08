<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProductTraceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ManufactureDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ManufactureTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BestBeforeDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegistrationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SerialIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemPropertyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LotIdentificationType;

/**
 *
 * @method mixed getProductTraceID()
 * @method self setProductTraceID($value)
 * @method mixed getManufactureDate()
 * @method self setManufactureDate($value)
 * @method mixed getManufactureTime()
 * @method self setManufactureTime($value)
 * @method mixed getBestBeforeDate()
 * @method self setBestBeforeDate($value)
 * @method mixed getRegistrationID()
 * @method self setRegistrationID($value)
 * @method mixed getSerialID()
 * @method self setSerialID($value)
 * @method mixed getAdditionalItemProperty()
 * @method self setAdditionalItemProperty($value)
 * @method mixed getLotIdentification()
 * @method self setLotIdentification($value)
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