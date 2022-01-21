<?php

namespace Uctoplus\UblWrapper;

use Uctoplus\UblWrapper\Exceptions\FileNotFoundException;
use Uctoplus\UblWrapper\Exceptions\FileNotReadableException;
use Uctoplus\UblWrapper\UBL\Schema\MainDoc;

class Parser
{
    /**
     * @var MainDoc[]
     */
    private $documents = [];

    public function fromFile($file)
    {
        if (!file_exists($file))
            throw new FileNotFoundException($file);

        $fileContent = file_get_contents($file);
        if (!$fileContent)
            throw new FileNotReadableException($file);

        return $this->fromString($fileContent);
    }

    public function fromString($string)
    {


        return $this;
    }
}