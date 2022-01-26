<?php

namespace Uctoplus\UblWrapper\XML\Exceptions;

use Exception;
use Throwable;

/**
 * Class XSDValidationException
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\XML\Exceptions
 */
class XSDValidationException extends Exception
{
    public function __construct($name, $cast, Throwable $previous = null)
    {
        parent::__construct("Attribute[" . $name . "] has not valid type[" . $cast . "]!");
    }
}