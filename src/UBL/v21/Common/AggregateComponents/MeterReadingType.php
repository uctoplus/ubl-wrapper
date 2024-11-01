<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeliveredQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestMeterQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestMeterReadingDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestMeterReadingMethodCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestMeterReadingMethodType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeterReadingCommentsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeterReadingTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeterReadingTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreviousMeterQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreviousMeterReadingDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreviousMeterReadingMethodCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreviousMeterReadingMethodType;

/**
 * Class MeterReadingType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method MeterReadingTypeType getMeterReadingType()
 * @method self setMeterReadingType(MeterReadingTypeType|string $value)
 * @method MeterReadingTypeCodeType getMeterReadingTypeCode()
 * @method self setMeterReadingTypeCode(MeterReadingTypeCodeType|string $value)
 * @method PreviousMeterReadingDateType getPreviousMeterReadingDate()
 * @method self setPreviousMeterReadingDate(PreviousMeterReadingDateType|string $value)
 * @method PreviousMeterQuantityType getPreviousMeterQuantity()
 * @method self setPreviousMeterQuantity(PreviousMeterQuantityType|string $value)
 * @method LatestMeterReadingDateType getLatestMeterReadingDate()
 * @method self setLatestMeterReadingDate(LatestMeterReadingDateType|string $value)
 * @method LatestMeterQuantityType getLatestMeterQuantity()
 * @method self setLatestMeterQuantity(LatestMeterQuantityType|string $value)
 * @method PreviousMeterReadingMethodType getPreviousMeterReadingMethod()
 * @method self setPreviousMeterReadingMethod(PreviousMeterReadingMethodType|string $value)
 * @method PreviousMeterReadingMethodCodeType getPreviousMeterReadingMethodCode()
 * @method self setPreviousMeterReadingMethodCode(PreviousMeterReadingMethodCodeType|string $value)
 * @method LatestMeterReadingMethodType getLatestMeterReadingMethod()
 * @method self setLatestMeterReadingMethod(LatestMeterReadingMethodType|string $value)
 * @method LatestMeterReadingMethodCodeType getLatestMeterReadingMethodCode()
 * @method self setLatestMeterReadingMethodCode(LatestMeterReadingMethodCodeType|string $value)
 * @method MeterReadingCommentsType[] getMeterReadingComments()
 * @method self addMeterReadingComments(MeterReadingCommentsType|string $value)
 * @method self setMeterReadingComments(MeterReadingCommentsType ...$values)
 * @method DeliveredQuantityType getDeliveredQuantity()
 * @method self setDeliveredQuantity(DeliveredQuantityType|string $value)
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