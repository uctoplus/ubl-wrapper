<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxTypeCodeType;

/**
 * Class TaxSchemeType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method TaxTypeCodeType getTaxTypeCode()
 * @method self setTaxTypeCode(TaxTypeCodeType|string $value)
 * @method CurrencyCodeType getCurrencyCode()
 * @method self setCurrencyCode(CurrencyCodeType|string $value)
 * @method AddressType[] getJurisdictionRegionAddress()
 * @method self addJurisdictionRegionAddress(AddressType $value)
 * @method self setJurisdictionRegionAddress(AddressType ...$values)
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