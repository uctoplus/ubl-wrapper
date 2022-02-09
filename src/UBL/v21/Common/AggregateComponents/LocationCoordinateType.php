<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AltitudeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CoordinateSystemCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatitudeDegreesMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatitudeDirectionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatitudeMinutesMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LongitudeDegreesMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LongitudeDirectionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LongitudeMinutesMeasureType;

/**
 * Class LocationCoordinateType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method CoordinateSystemCodeType getCoordinateSystemCode()
 * @method self setCoordinateSystemCode(CoordinateSystemCodeType|string $value)
 * @method LatitudeDegreesMeasureType getLatitudeDegreesMeasure()
 * @method self setLatitudeDegreesMeasure(LatitudeDegreesMeasureType|string $value)
 * @method LatitudeMinutesMeasureType getLatitudeMinutesMeasure()
 * @method self setLatitudeMinutesMeasure(LatitudeMinutesMeasureType|string $value)
 * @method LatitudeDirectionCodeType getLatitudeDirectionCode()
 * @method self setLatitudeDirectionCode(LatitudeDirectionCodeType|string $value)
 * @method LongitudeDegreesMeasureType getLongitudeDegreesMeasure()
 * @method self setLongitudeDegreesMeasure(LongitudeDegreesMeasureType|string $value)
 * @method LongitudeMinutesMeasureType getLongitudeMinutesMeasure()
 * @method self setLongitudeMinutesMeasure(LongitudeMinutesMeasureType|string $value)
 * @method LongitudeDirectionCodeType getLongitudeDirectionCode()
 * @method self setLongitudeDirectionCode(LongitudeDirectionCodeType|string $value)
 * @method AltitudeMeasureType getAltitudeMeasure()
 * @method self setAltitudeMeasure(AltitudeMeasureType|string $value)
 */
class LocationCoordinateType extends AggregateComponent
{
    protected $casts = [
        "cbc:CoordinateSystemCode" => CoordinateSystemCodeType::class,
        "cbc:LatitudeDegreesMeasure" => LatitudeDegreesMeasureType::class,
        "cbc:LatitudeMinutesMeasure" => LatitudeMinutesMeasureType::class,
        "cbc:LatitudeDirectionCode" => LatitudeDirectionCodeType::class,
        "cbc:LongitudeDegreesMeasure" => LongitudeDegreesMeasureType::class,
        "cbc:LongitudeMinutesMeasure" => LongitudeMinutesMeasureType::class,
        "cbc:LongitudeDirectionCode" => LongitudeDirectionCodeType::class,
        "cbc:AltitudeMeasure" => AltitudeMeasureType::class,
    ];

    protected $minOccurs = [
    ];
}