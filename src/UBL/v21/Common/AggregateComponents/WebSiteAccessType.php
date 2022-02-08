<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\URIType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PasswordType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LoginType;

/**
 *
 * @method mixed getURI()
 * @method self setURI($value)
 * @method mixed getPassword()
 * @method self setPassword($value)
 * @method mixed getLogin()
 * @method self setLogin($value)
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