<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;

/**
 * Class TransactionConditionsType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getActionCode()
 * @method self setActionCode($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getDocumentReference()
 * @method self addDocumentReference($value)
 * @method self setDocumentReference($value)
 */
class TransactionConditionsType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:ActionCode" => ActionCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}