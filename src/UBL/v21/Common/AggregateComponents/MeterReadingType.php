<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeterReadingTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeterReadingTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreviousMeterReadingDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreviousMeterQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestMeterReadingDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestMeterQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreviousMeterReadingMethodType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreviousMeterReadingMethodCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestMeterReadingMethodType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestMeterReadingMethodCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeterReadingCommentsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeliveredQuantityType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getMeterReadingType()
 * @method self setMeterReadingType($value)
 * @method mixed getMeterReadingTypeCode()
 * @method self setMeterReadingTypeCode($value)
 * @method mixed getPreviousMeterReadingDate()
 * @method self setPreviousMeterReadingDate($value)
 * @method mixed getPreviousMeterQuantity()
 * @method self setPreviousMeterQuantity($value)
 * @method mixed getLatestMeterReadingDate()
 * @method self setLatestMeterReadingDate($value)
 * @method mixed getLatestMeterQuantity()
 * @method self setLatestMeterQuantity($value)
 * @method mixed getPreviousMeterReadingMethod()
 * @method self setPreviousMeterReadingMethod($value)
 * @method mixed getPreviousMeterReadingMethodCode()
 * @method self setPreviousMeterReadingMethodCode($value)
 * @method mixed getLatestMeterReadingMethod()
 * @method self setLatestMeterReadingMethod($value)
 * @method mixed getLatestMeterReadingMethodCode()
 * @method self setLatestMeterReadingMethodCode($value)
 * @method mixed getMeterReadingComments()
 * @method self setMeterReadingComments($value)
 * @method mixed getDeliveredQuantity()
 * @method self setDeliveredQuantity($value)
 */
class MeterReadingType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:MeterReadingType" => MeterReadingTypeType::class,
        "cbc:MeterReadingTypeCode" => MeterReadingTypeCodeType::class,
        "cbc:PreviousMeterReadingDate" => PreviousMeterReadingDateType::class,
        "cbc:PreviousMeterQuantity" => PreviousMeterQuantityType::class,
        "cbc:LatestMeterReadingDate" => LatestMeterReadingDateType::class,
        "cbc:LatestMeterQuantity" => LatestMeterQuantityType::class,
        "cbc:PreviousMeterReadingMethod" => PreviousMeterReadingMethodType::class,
        "cbc:PreviousMeterReadingMethodCode" => PreviousMeterReadingMethodCodeType::class,
        "cbc:LatestMeterReadingMethod" => LatestMeterReadingMethodType::class,
        "cbc:LatestMeterReadingMethodCode" => LatestMeterReadingMethodCodeType::class,
        "cbc:MeterReadingComments" => MeterReadingCommentsType::class . "[]",
        "cbc:DeliveredQuantity" => DeliveredQuantityType::class,
    ];

    protected $minOccurs = [
        "cbc:PreviousMeterReadingDate" => 1,
        "cbc:PreviousMeterQuantity" => 1,
        "cbc:LatestMeterReadingDate" => 1,
        "cbc:LatestMeterQuantity" => 1,
        "cbc:DeliveredQuantity" => 1,
    ];
}