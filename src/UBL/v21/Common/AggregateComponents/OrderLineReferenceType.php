<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SalesOrderLineIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\OrderReferenceType;

/**
 *
 * @method mixed getLineID()
 * @method self setLineID($value)
 * @method mixed getSalesOrderLineID()
 * @method self setSalesOrderLineID($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getLineStatusCode()
 * @method self setLineStatusCode($value)
 * @method mixed getOrderReference()
 * @method self setOrderReference($value)
 */
class OrderLineReferenceType extends AggregateComponent
{
    protected $casts = [
        "cbc:LineID" => LineIDType::class,
        "cbc:SalesOrderLineID" => SalesOrderLineIDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:LineStatusCode" => LineStatusCodeType::class,
        "cac:OrderReference" => OrderReferenceType::class,
    ];

    protected $minOccurs = [
        "cbc:LineID" => 1,
    ];
}