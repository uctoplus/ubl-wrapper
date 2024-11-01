<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BackorderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BackorderReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeliveredQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OutstandingQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OutstandingReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OversupplyQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;

/**
 * Class DespatchLineType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method LineStatusCodeType getLineStatusCode()
 * @method self setLineStatusCode(LineStatusCodeType|string $value)
 * @method DeliveredQuantityType getDeliveredQuantity()
 * @method self setDeliveredQuantity(DeliveredQuantityType|string $value)
 * @method BackorderQuantityType getBackorderQuantity()
 * @method self setBackorderQuantity(BackorderQuantityType|string $value)
 * @method BackorderReasonType[] getBackorderReason()
 * @method self addBackorderReason(BackorderReasonType|string $value)
 * @method self setBackorderReason(BackorderReasonType ...$values)
 * @method OutstandingQuantityType getOutstandingQuantity()
 * @method self setOutstandingQuantity(OutstandingQuantityType|string $value)
 * @method OutstandingReasonType[] getOutstandingReason()
 * @method self addOutstandingReason(OutstandingReasonType|string $value)
 * @method self setOutstandingReason(OutstandingReasonType ...$values)
 * @method OversupplyQuantityType getOversupplyQuantity()
 * @method self setOversupplyQuantity(OversupplyQuantityType|string $value)
 * @method OrderLineReferenceType[] getOrderLineReference()
 * @method self addOrderLineReference(OrderLineReferenceType $value)
 * @method self setOrderLineReference(OrderLineReferenceType ...$values)
 * @method DocumentReferenceType[] getDocumentReference()
 * @method self addDocumentReference(DocumentReferenceType $value)
 * @method self setDocumentReference(DocumentReferenceType ...$values)
 * @method ItemType getItem()
 * @method self setItem(ItemType $value)
 * @method ShipmentType[] getShipment()
 * @method self addShipment(ShipmentType $value)
 * @method self setShipment(ShipmentType ...$values)
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