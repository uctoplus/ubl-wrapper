<?php

namespace Uctoplus\UblWrapper\Exceptions;

use Exception;
use Throwable;

class FileNotReadableException extends Exception
{

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct("Unable to read content of File[" . $message . "]", $code, $previous);
    }
}