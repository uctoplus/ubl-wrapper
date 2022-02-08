<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SalesOrderIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CopyIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomerReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrderTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getSalesOrderID()
 * @method self setSalesOrderID($value)
 * @method mixed getCopyIndicator()
 * @method self setCopyIndicator($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getIssueDate()
 * @method self setIssueDate($value)
 * @method mixed getIssueTime()
 * @method self setIssueTime($value)
 * @method mixed getCustomerReference()
 * @method self setCustomerReference($value)
 * @method mixed getOrderTypeCode()
 * @method self setOrderTypeCode($value)
 * @method mixed getDocumentReference()
 * @method self setDocumentReference($value)
 */
class OrderReferenceType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:SalesOrderID" => SalesOrderIDType::class,
        "cbc:CopyIndicator" => CopyIndicatorType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cbc:IssueTime" => IssueTimeType::class,
        "cbc:CustomerReference" => CustomerReferenceType::class,
        "cbc:OrderTypeCode" => OrderTypeCodeType::class,
        "cac:DocumentReference" => DocumentReferenceType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}