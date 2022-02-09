<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LoginType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PasswordType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\URIType;

/**
 * Class WebSiteAccessType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method URIType getURI()
 * @method self setURI(URIType|string $value)
 * @method PasswordType getPassword()
 * @method self setPassword(PasswordType|string $value)
 * @method LoginType getLogin()
 * @method self setLogin(LoginType|string $value)
 */
class WebSiteAccessType extends AggregateComponent
{
    protected $casts = [
        "cbc:URI" => URIType::class,
        "cbc:Password" => PasswordType::class,
        "cbc:Login" => LoginType::class,
    ];

    protected $minOccurs = [
        "cbc:Password" => 1,
        "cbc:Login" => 1,
    ];
}