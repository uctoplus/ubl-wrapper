<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LegalReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OntologyURIType;

/**
 * Class RegulationType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method LegalReferenceType getLegalReference()
 * @method self setLegalReference(LegalReferenceType|string $value)
 * @method OntologyURIType getOntologyURI()
 * @method self setOntologyURI(OntologyURIType|string $value)
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