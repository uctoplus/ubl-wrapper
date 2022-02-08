<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TenderingTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ProcurementProjectType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getTenderingTerms()
 * @method self setTenderingTerms($value)
 * @method mixed getProcurementProject()
 * @method self setProcurementProject($value)
 */
class ProcurementProjectLotType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cac:TenderingTerms" => TenderingTermsType::class,
        "cac:ProcurementProject" => ProcurementProjectType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}