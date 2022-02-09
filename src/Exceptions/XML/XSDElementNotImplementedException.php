<?php

namespace Uctoplus\UblWrapper\Exceptions\XML;

use Exception;

/**
 * Class XSDElementNotImplementedException
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\XML\Exceptions
 */
class XSDElementNotImplementedException extends Exception
{
    public function __construct($class = "")
    {
        parent::__construct("Class[" . $class . "] does not exists");
    }
}