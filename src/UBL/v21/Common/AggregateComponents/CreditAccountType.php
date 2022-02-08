<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountIDType;

/**
 *
 * @method mixed getAccountID()
 * @method self setAccountID($value)
 */
class CreditAccountType extends AggregateComponent
{
    protected $casts = [
        "cbc:AccountID" => AccountIDType::class,
    ];

    protected $minOccurs = [
        "cbc:AccountID" => 1,
    ];
}