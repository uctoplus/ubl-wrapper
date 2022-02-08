<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LegalReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OntologyURIType;

/**
 *
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getLegalReference()
 * @method self setLegalReference($value)
 * @method mixed getOntologyURI()
 * @method self setOntologyURI($value)
 */
class RegulationType extends AggregateComponent
{
    protected $casts = [
        "cbc:Name" => NameType::class,
        "cbc:LegalReference" => LegalReferenceType::class,
        "cbc:OntologyURI" => OntologyURIType::class,
    ];

    protected $minOccurs = [
        "cbc:Name" => 1,
    ];
}