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
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method URIType getURI()
 * @method self setURI(URIType|string $value)
 * @method DocumentHashType getDocumentHash()
 * @method self setDocumentHash(DocumentHashType|string $value)
 * @method HashAlgorithmMethodType getHashAlgorithmMethod()
 * @method self setHashAlgorithmMethod(HashAlgorithmMethodType|string $value)
 * @method ExpiryDateType getExpiryDate()
 * @method self setExpiryDate(ExpiryDateType|string $value)
 * @method ExpiryTimeType getExpiryTime()
 * @method self setExpiryTime(ExpiryTimeType|string $value)
 * @method MimeCodeType getMimeCode()
 * @method self setMimeCode(MimeCodeType|string $value)
 * @method FormatCodeType getFormatCode()
 * @method self setFormatCode(FormatCodeType|string $value)
 * @method EncodingCodeType getEncodingCode()
 * @method self setEncodingCode(EncodingCodeType|string $value)
 * @method CharacterSetCodeType getCharacterSetCode()
 * @method self setCharacterSetCode(CharacterSetCodeType|string $value)
 * @method FileNameType getFileName()
 * @method self setFileName(FileNameType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
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