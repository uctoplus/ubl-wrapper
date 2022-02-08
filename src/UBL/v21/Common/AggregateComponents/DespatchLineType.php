<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeliveredQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BackorderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BackorderReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OutstandingQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OutstandingReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OversupplyQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\OrderLineReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ShipmentType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getLineStatusCode()
 * @method self setLineStatusCode($value)
 * @method mixed getDeliveredQuantity()
 * @method self setDeliveredQuantity($value)
 * @method mixed getBackorderQuantity()
 * @method self setBackorderQuantity($value)
 * @method mixed getBackorderReason()
 * @method self setBackorderReason($value)
 * @method mixed getOutstandingQuantity()
 * @method self setOutstandingQuantity($value)
 * @method mixed getOutstandingReason()
 * @method self setOutstandingReason($value)
 * @method mixed getOversupplyQuantity()
 * @method self setOversupplyQuantity($value)
 * @method mixed getOrderLineReference()
 * @method self setOrderLineReference($value)
 * @method mixed getDocumentReference()
 * @method self setDocumentReference($value)
 * @method mixed getItem()
 * @method self setItem($value)
 * @method mixed getShipment()
 * @method self setShipment($value)
 */
class DespatchLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:LineStatusCode" => LineStatusCodeType::class,
        "cbc:DeliveredQuantity" => DeliveredQuantityType::class,
        "cbc:BackorderQuantity" => BackorderQuantityType::class,
        "cbc:BackorderReason" => BackorderReasonType::class . "[]",
        "cbc:OutstandingQuantity" => OutstandingQuantityType::class,
        "cbc:OutstandingReason" => OutstandingReasonType::class . "[]",
        "cbc:OversupplyQuantity" => OversupplyQuantityType::class,
        "cac:OrderLineReference" => OrderLineReferenceType::class . "[]",
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:Item" => ItemType::class,
        "cac:Shipment" => ShipmentType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cac:OrderLineReference" => 1,
        "cac:Item" => 1,
    ];
}