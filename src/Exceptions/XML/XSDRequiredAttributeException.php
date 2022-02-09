<?php

namespace Uctoplus\UblWrapper\Exceptions\XML;

use Exception;
use Throwable;

class XSDRequiredAttributeException extends Exception
{
    public function __construct($tag, $attribute, Throwable $previous = null)
    {
        parent::__construct("Attribute[" . $attribute . "] required for Tag[" . $tag . "]");
    }
}