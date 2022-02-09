<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EmergencyProceduresCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExtensionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PlacardEndorsementType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PlacardNotationType;

/**
 * Class SecondaryHazardType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method PlacardNotationType getPlacardNotation()
 * @method self setPlacardNotation(PlacardNotationType|string $value)
 * @method PlacardEndorsementType getPlacardEndorsement()
 * @method self setPlacardEndorsement(PlacardEndorsementType|string $value)
 * @method EmergencyProceduresCodeType getEmergencyProceduresCode()
 * @method self setEmergencyProceduresCode(EmergencyProceduresCodeType|string $value)
 * @method ExtensionType getExtension()
 * @method self addExtension(ExtensionType|string $value)
 * @method self setExtension(ExtensionType ...$values)
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