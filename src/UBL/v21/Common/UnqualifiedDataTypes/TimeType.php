<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes;

use Carbon\Carbon;
use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 * Class TimeType
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes
 */
class TimeType extends BasicComponent
{
    protected $type = "udt:TimeType";

    public function __toString()
    {
        $value = $this->value;
        if (!($value instanceof Carbon)) {
            $value = Carbon::parse($this->value);
        }

        return (string)$value->toISOString();
    }
}