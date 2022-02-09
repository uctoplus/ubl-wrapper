<?php

namespace Uctoplus\UblWrapper\Exceptions\XML;


use Exception;
use Throwable;

class XSDCastNotExistsException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct("Cast for Type[" . $message . "] does not exists!", $code, $previous);
    }
}