<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CharacterSetCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DocumentHashType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EncodingCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExpiryDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExpiryTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FileNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FormatCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HashAlgorithmMethodType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MimeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\URIType;

/**
 * Class ExternalReferenceType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getURI()
 * @method self setURI($value)
 * @method mixed getDocumentHash()
 * @method self setDocumentHash($value)
 * @method mixed getHashAlgorithmMethod()
 * @method self setHashAlgorithmMethod($value)
 * @method mixed getExpiryDate()
 * @method self setExpiryDate($value)
 * @method mixed getExpiryTime()
 * @method self setExpiryTime($value)
 * @method mixed getMimeCode()
 * @method self setMimeCode($value)
 * @method mixed getFormatCode()
 * @method self setFormatCode($value)
 * @method mixed getEncodingCode()
 * @method self setEncodingCode($value)
 * @method mixed getCharacterSetCode()
 * @method self setCharacterSetCode($value)
 * @method mixed getFileName()
 * @method self setFileName($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 */
class ExternalReferenceType extends AggregateComponent
{
    protected $casts = [
        "cbc:URI" => URIType::class,
        "cbc:DocumentHash" => DocumentHashType::class,
        "cbc:HashAlgorithmMethod" => HashAlgorithmMethodType::class,
        "cbc:ExpiryDate" => ExpiryDateType::class,
        "cbc:ExpiryTime" => ExpiryTimeType::class,
        "cbc:MimeCode" => MimeCodeType::class,
        "cbc:FormatCode" => FormatCodeType::class,
        "cbc:EncodingCode" => EncodingCodeType::class,
        "cbc:CharacterSetCode" => CharacterSetCodeType::class,
        "cbc:FileName" => FileNameType::class,
        "cbc:Description" => DescriptionType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}