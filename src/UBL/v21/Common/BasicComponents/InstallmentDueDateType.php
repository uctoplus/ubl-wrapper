<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 *
 * @method mixed getDateType()
 * @method self setDateType(string $value)
 */
class InstallmentDueDateType extends BasicComponent
{
    protected $type = "udt:DateType";
}