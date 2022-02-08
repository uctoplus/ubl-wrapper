<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumCopiesNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PrintQualifierType;

/**
 * Class DocumentDistributionType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getPrintQualifier()
 * @method self setPrintQualifier($value)
 * @method mixed getMaximumCopiesNumeric()
 * @method self setMaximumCopiesNumeric($value)
 * @method mixed getParty()
 * @method self setParty($value)
 */
class DocumentDistributionType extends AggregateComponent
{
    protected $casts = [
        "cbc:PrintQualifier" => PrintQualifierType::class,
        "cbc:MaximumCopiesNumeric" => MaximumCopiesNumericType::class,
        "cac:Party" => PartyType::class,
    ];

    protected $minOccurs = [
        "cbc:PrintQualifier" => 1,
        "cbc:MaximumCopiesNumeric" => 1,
        "cac:Party" => 1,
    ];
}