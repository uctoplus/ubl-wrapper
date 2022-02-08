<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PlacardNotationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PlacardEndorsementType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EmergencyProceduresCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExtensionType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getPlacardNotation()
 * @method self setPlacardNotation($value)
 * @method mixed getPlacardEndorsement()
 * @method self setPlacardEndorsement($value)
 * @method mixed getEmergencyProceduresCode()
 * @method self setEmergencyProceduresCode($value)
 * @method mixed getExtension()
 * @method self setExtension($value)
 */
class SecondaryHazardType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:PlacardNotation" => PlacardNotationType::class,
        "cbc:PlacardEndorsement" => PlacardEndorsementType::class,
        "cbc:EmergencyProceduresCode" => EmergencyProceduresCodeType::class,
        "cbc:Extension" => ExtensionType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}