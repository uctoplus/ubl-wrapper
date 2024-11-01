<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumCopiesNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PrintQualifierType;

/**
 * Class DocumentDistributionType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method PrintQualifierType getPrintQualifier()
 * @method self setPrintQualifier(PrintQualifierType|string $value)
 * @method MaximumCopiesNumericType getMaximumCopiesNumeric()
 * @method self setMaximumCopiesNumeric(MaximumCopiesNumericType|string $value)
 * @method PartyType getParty()
 * @method self setParty(PartyType $value)
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