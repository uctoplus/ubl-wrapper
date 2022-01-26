<?php

namespace Uctoplus\UblWrapper\UBL\Schema;

use Uctoplus\UblWrapper\XML\BaseXMLElement;

/**
 * Class MainDoc
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\Schema
 */
abstract class MainDoc extends BaseXMLElement
{
    protected $UBLVersionID = '2.1';

    protected $tag = "";

    /**
     * @return string
     */
    public function getTag()
    {
        if (empty($this->tag)) {
            $path = explode('\\', __CLASS__);
            return rtrim(array_pop($path), "Type");
        }

        return $this->tag;
    }
}