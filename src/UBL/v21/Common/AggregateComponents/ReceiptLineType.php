<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReceivedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ShortQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ShortageActionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RejectedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RejectReasonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RejectReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RejectActionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityDiscrepancyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OversupplyQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReceivedDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TimingComplaintCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TimingComplaintType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\OrderLineReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LineReferenceType;
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
 * @method mixed getReceivedQuantity()
 * @method self setReceivedQuantity($value)
 * @method mixed getShortQuantity()
 * @method self setShortQuantity($value)
 * @method mixed getShortageActionCode()
 * @method self setShortageActionCode($value)
 * @method mixed getRejectedQuantity()
 * @method self setRejectedQuantity($value)
 * @method mixed getRejectReasonCode()
 * @method self setRejectReasonCode($value)
 * @method mixed getRejectReason()
 * @method self setRejectReason($value)
 * @method mixed getRejectActionCode()
 * @method self setRejectActionCode($value)
 * @method mixed getQuantityDiscrepancyCode()
 * @method self setQuantityDiscrepancyCode($value)
 * @method mixed getOversupplyQuantity()
 * @method self setOversupplyQuantity($value)
 * @method mixed getReceivedDate()
 * @method self setReceivedDate($value)
 * @method mixed getTimingComplaintCode()
 * @method self setTimingComplaintCode($value)
 * @method mixed getTimingComplaint()
 * @method self setTimingComplaint($value)
 * @method mixed getOrderLineReference()
 * @method self setOrderLineReference($value)
 * @method mixed getDespatchLineReference()
 * @method self setDespatchLineReference($value)
 * @method mixed getDocumentReference()
 * @method self setDocumentReference($value)
 * @method mixed getItem()
 * @method self setItem($value)
 * @method mixed getShipment()
 * @method self setShipment($value)
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