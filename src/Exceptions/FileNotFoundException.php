<?php

namespace Uctoplus\UblWrapper\Exceptions;

use Throwable;

class FileNotFoundException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct("File[" . $message . "] not found on its place!", $code, $previous);
    }
}