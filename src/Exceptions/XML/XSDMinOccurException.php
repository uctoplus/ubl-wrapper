<?php

namespace Uctoplus\UblWrapper\Exceptions\XML;

use Throwable;

class XSDMinOccurException extends \Exception
{
    public function __construct($tag, $minOccur, Throwable $previous = null)
    {
        parent::__construct("Missing required tag[" . $tag . "]");
    }
}