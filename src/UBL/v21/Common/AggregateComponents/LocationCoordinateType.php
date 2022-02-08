<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CoordinateSystemCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatitudeDegreesMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatitudeMinutesMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatitudeDirectionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LongitudeDegreesMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LongitudeMinutesMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LongitudeDirectionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AltitudeMeasureType;

/**
 *
 * @method mixed getCoordinateSystemCode()
 * @method self setCoordinateSystemCode($value)
 * @method mixed getLatitudeDegreesMeasure()
 * @method self setLatitudeDegreesMeasure($value)
 * @method mixed getLatitudeMinutesMeasure()
 * @method self setLatitudeMinutesMeasure($value)
 * @method mixed getLatitudeDirectionCode()
 * @method self setLatitudeDirectionCode($value)
 * @method mixed getLongitudeDegreesMeasure()
 * @method self setLongitudeDegreesMeasure($value)
 * @method mixed getLongitudeMinutesMeasure()
 * @method self setLongitudeMinutesMeasure($value)
 * @method mixed getLongitudeDirectionCode()
 * @method self setLongitudeDirectionCode($value)
 * @method mixed getAltitudeMeasure()
 * @method self setAltitudeMeasure($value)
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