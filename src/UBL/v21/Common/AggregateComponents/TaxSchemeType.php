<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AddressType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getTaxTypeCode()
 * @method self setTaxTypeCode($value)
 * @method mixed getCurrencyCode()
 * @method self setCurrencyCode($value)
 * @method mixed getJurisdictionRegionAddress()
 * @method self setJurisdictionRegionAddress($value)
 */
class TaxSchemeType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Name" => NameType::class,
        "cbc:TaxTypeCode" => TaxTypeCodeType::class,
        "cbc:CurrencyCode" => CurrencyCodeType::class,
        "cac:JurisdictionRegionAddress" => AddressType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}