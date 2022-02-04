<?php

namespace Uctoplus\UblWrapper\XML\Exceptions;

use Throwable;

class XSDMinOccurException extends \Exception
{
    public function __construct($tag, $minOccur, Throwable $previous = null)
    {
        parent::__construct("Missing required tag[" . $tag . "]");
    }
}