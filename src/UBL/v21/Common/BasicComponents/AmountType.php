<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 *
 * @method mixed getAmountType()
 * @method self setAmountType(string $value)
 */
class AmountType extends BasicComponent
{
    protected $type = "udt:AmountType";

    protected $attributes = [
        'currencyID' => true,
        'currencyCodeListVersionID' => false,
    ];
}