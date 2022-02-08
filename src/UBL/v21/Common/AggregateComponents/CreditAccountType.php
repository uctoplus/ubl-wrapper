<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountIDType;

/**
 * Class CreditAccountType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
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