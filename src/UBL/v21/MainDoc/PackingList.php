<?php

namespace Uctoplus\UblWrapper\UBL\v21\MainDoc;

use Uctoplus\UblWrapper\UBL\Schema\MainDoc;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentDistributionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ShipmentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SignatureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomizationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OtherInstructionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProfileExecutionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProfileIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VersionIDType;
use Uctoplus\UblWrapper\UBL\v21\Version;

/**
 * Class PackingList
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\MainDoc
 *
 * @method CustomizationIDType getCustomizationID()
 * @method self setCustomizationID(CustomizationIDType|string $value)
 * @method ProfileIDType getProfileID()
 * @method self setProfileID(ProfileIDType|string $value)
 * @method ProfileExecutionIDType getProfileExecutionID()
 * @method self setProfileExecutionID(ProfileExecutionIDType|string $value)
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method IssueDateType getIssueDate()
 * @method self setIssueDate(IssueDateType|string $value)
 * @method IssueTimeType getIssueTime()
 * @method self setIssueTime(IssueTimeType|string $value)
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method VersionIDType getVersionID()
 * @method self setVersionID(VersionIDType|string $value)
 * @method OtherInstructionType getOtherInstruction()
 * @method self setOtherInstruction(OtherInstructionType|string $value)
 * @method PartyType getConsignorParty()
 * @method self setConsignorParty(PartyType $value)
 * @method PartyType getCarrierParty()
 * @method self setCarrierParty(PartyType $value)
 * @method PartyType getFreightForwarderParty()
 * @method self setFreightForwarderParty(PartyType $value)
 * @method ShipmentType getShipment()
 * @method self setShipment(ShipmentType $value)
 * @method DocumentReferenceType[] getDocumentReference()
 * @method self addDocumentReference(DocumentReferenceType $value)
 * @method self setDocumentReference(DocumentReferenceType ...$values)
 * @method DocumentDistributionType[] getDocumentDistribution()
 * @method self addDocumentDistribution(DocumentDistributionType $value)
 * @method self setDocumentDistribution(DocumentDistributionType ...$values)
 * @method SignatureType[] getSignature()
 * @method self addSignature(SignatureType $value)
 * @method self setSignature(SignatureType ...$values)
 */
class PackingList extends MainDoc
{
    protected $UBLVersionID = Version::VERSION_CODE;
    protected $xmlns = "urn:oasis:names:specification:ubl:schema:xsd:PackingList-2";

    protected $casts = [
        "cbc:CustomizationID" => CustomizationIDType::class,
        "cbc:ProfileID" => ProfileIDType::class,
        "cbc:ProfileExecutionID" => ProfileExecutionIDType::class,
        "cbc:ID" => IDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cbc:IssueTime" => IssueTimeType::class,
        "cbc:Name" => NameType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:Note" => NoteType::class . "[]",
        "cbc:VersionID" => VersionIDType::class,
        "cbc:OtherInstruction" => OtherInstructionType::class,
        "cac:ConsignorParty" => PartyType::class,
        "cac:CarrierParty" => PartyType::class,
        "cac:FreightForwarderParty" => PartyType::class,
        "cac:Shipment" => ShipmentType::class,
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:DocumentDistribution" => DocumentDistributionType::class . "[]",
        "cac:Signature" => SignatureType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cac:Shipment" => 1,
    ];
}