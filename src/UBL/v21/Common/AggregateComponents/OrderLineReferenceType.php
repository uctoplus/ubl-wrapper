<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SalesOrderLineIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;

/**
 * Class OrderLineReferenceType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method LineIDType getLineID()
 * @method self setLineID(LineIDType|string $value)
 * @method SalesOrderLineIDType getSalesOrderLineID()
 * @method self setSalesOrderLineID(SalesOrderLineIDType|string $value)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method LineStatusCodeType getLineStatusCode()
 * @method self setLineStatusCode(LineStatusCodeType|string $value)
 * @method OrderReferenceType getOrderReference()
 * @method self setOrderReference(OrderReferenceType $value)
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