<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;

/**
 * Class ProcurementProjectLotType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method TenderingTermsType getTenderingTerms()
 * @method self setTenderingTerms(TenderingTermsType $value)
 * @method ProcurementProjectType getProcurementProject()
 * @method self setProcurementProject(ProcurementProjectType $value)
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