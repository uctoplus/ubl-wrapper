<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes;

use Carbon\Carbon;
use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 * Class DateType
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes
 */
class DateType extends BasicComponent
{
    protected $type = "udt:DateType";

    public function __toString()
    {
        $value = $this->value;
        if (!($value instanceof Carbon)) {
            $value = Carbon::parse($this->value);
        }

        return $value->format('Y-m-d');
    }
}