<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OversupplyQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityDiscrepancyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReceivedDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReceivedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RejectActionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RejectedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RejectReasonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RejectReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ShortageActionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ShortQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TimingComplaintCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TimingComplaintType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;

/**
 * Class ReceiptLineType
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
 * @method ReceivedQuantityType getReceivedQuantity()
 * @method self setReceivedQuantity(ReceivedQuantityType|string $value)
 * @method ShortQuantityType getShortQuantity()
 * @method self setShortQuantity(ShortQuantityType|string $value)
 * @method ShortageActionCodeType getShortageActionCode()
 * @method self setShortageActionCode(ShortageActionCodeType|string $value)
 * @method RejectedQuantityType getRejectedQuantity()
 * @method self setRejectedQuantity(RejectedQuantityType|string $value)
 * @method RejectReasonCodeType getRejectReasonCode()
 * @method self setRejectReasonCode(RejectReasonCodeType|string $value)
 * @method RejectReasonType[] getRejectReason()
 * @method self addRejectReason(RejectReasonType|string $value)
 * @method self setRejectReason(RejectReasonType ...$values)
 * @method RejectActionCodeType getRejectActionCode()
 * @method self setRejectActionCode(RejectActionCodeType|string $value)
 * @method QuantityDiscrepancyCodeType getQuantityDiscrepancyCode()
 * @method self setQuantityDiscrepancyCode(QuantityDiscrepancyCodeType|string $value)
 * @method OversupplyQuantityType getOversupplyQuantity()
 * @method self setOversupplyQuantity(OversupplyQuantityType|string $value)
 * @method ReceivedDateType getReceivedDate()
 * @method self setReceivedDate(ReceivedDateType|string $value)
 * @method TimingComplaintCodeType getTimingComplaintCode()
 * @method self setTimingComplaintCode(TimingComplaintCodeType|string $value)
 * @method TimingComplaintType getTimingComplaint()
 * @method self setTimingComplaint(TimingComplaintType|string $value)
 * @method OrderLineReferenceType getOrderLineReference()
 * @method self setOrderLineReference(OrderLineReferenceType $value)
 * @method LineReferenceType[] getDespatchLineReference()
 * @method self addDespatchLineReference(LineReferenceType $value)
 * @method self setDespatchLineReference(LineReferenceType ...$values)
 * @method DocumentReferenceType[] getDocumentReference()
 * @method self addDocumentReference(DocumentReferenceType $value)
 * @method self setDocumentReference(DocumentReferenceType ...$values)
 * @method ItemType[] getItem()
 * @method self addItem(ItemType $value)
 * @method self setItem(ItemType ...$values)
 * @method ShipmentType[] getShipment()
 * @method self addShipment(ShipmentType $value)
 * @method self setShipment(ShipmentType ...$values)
 */
class ReceiptLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:ReceivedQuantity" => ReceivedQuantityType::class,
        "cbc:ShortQuantity" => ShortQuantityType::class,
        "cbc:ShortageActionCode" => ShortageActionCodeType::class,
        "cbc:RejectedQuantity" => RejectedQuantityType::class,
        "cbc:RejectReasonCode" => RejectReasonCodeType::class,
        "cbc:RejectReason" => RejectReasonType::class . "[]",
        "cbc:RejectActionCode" => RejectActionCodeType::class,
        "cbc:QuantityDiscrepancyCode" => QuantityDiscrepancyCodeType::class,
        "cbc:OversupplyQuantity" => OversupplyQuantityType::class,
        "cbc:ReceivedDate" => ReceivedDateType::class,
        "cbc:TimingComplaintCode" => TimingComplaintCodeType::class,
        "cbc:TimingComplaint" => TimingComplaintType::class,
        "cac:OrderLineReference" => OrderLineReferenceType::class,
        "cac:DespatchLineReference" => LineReferenceType::class . "[]",
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:Item" => ItemType::class . "[]",
        "cac:Shipment" => ShipmentType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}