<?php

namespace Uctoplus\UblWrapper\UBL\Schema;

/**
 * Class BasicComponent
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\Schema
 */
abstract class BasicComponent
{
    protected $namespace = "cbc";

    protected $value = null;

    public function __construct($value = null)
    {
        $this->value = $value;
    }
}