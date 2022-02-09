<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ApplicationStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CertificateTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OriginalJobIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreviousJobIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReferenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RemarksType;

/**
 * Class CertificateOfOriginApplicationType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ReferenceIDType getReferenceID()
 * @method self setReferenceID(ReferenceIDType|string $value)
 * @method CertificateTypeType getCertificateType()
 * @method self setCertificateType(CertificateTypeType|string $value)
 * @method ApplicationStatusCodeType getApplicationStatusCode()
 * @method self setApplicationStatusCode(ApplicationStatusCodeType|string $value)
 * @method OriginalJobIDType getOriginalJobID()
 * @method self setOriginalJobID(OriginalJobIDType|string $value)
 * @method PreviousJobIDType getPreviousJobID()
 * @method self setPreviousJobID(PreviousJobIDType|string $value)
 * @method RemarksType getRemarks()
 * @method self addRemarks(RemarksType|string $value)
 * @method self setRemarks(RemarksType ...$values)
 * @method ShipmentType getShipment()
 * @method self setShipment(ShipmentType $value)
 * @method EndorserPartyType getEndorserParty()
 * @method self addEndorserParty(EndorserPartyType $value)
 * @method self setEndorserParty(EndorserPartyType ...$values)
 * @method PartyType getPreparationParty()
 * @method self setPreparationParty(PartyType $value)
 * @method PartyType getIssuerParty()
 * @method self setIssuerParty(PartyType $value)
 * @method PartyType getExporterParty()
 * @method self setExporterParty(PartyType $value)
 * @method PartyType getImporterParty()
 * @method self setImporterParty(PartyType $value)
 * @method CountryType getIssuingCountry()
 * @method self setIssuingCountry(CountryType $value)
 * @method DocumentDistributionType getDocumentDistribution()
 * @method self addDocumentDistribution(DocumentDistributionType $value)
 * @method self setDocumentDistribution(DocumentDistributionType ...$values)
 * @method DocumentReferenceType getSupportingDocumentReference()
 * @method self addSupportingDocumentReference(DocumentReferenceType $value)
 * @method self setSupportingDocumentReference(DocumentReferenceType ...$values)
 * @method SignatureType getSignature()
 * @method self addSignature(SignatureType $value)
 * @method self setSignature(SignatureType ...$values)
 */
class CertificateOfOriginApplicationType extends AggregateComponent
{
    protected $casts = [
        "cbc:ReferenceID" => ReferenceIDType::class,
        "cbc:CertificateType" => CertificateTypeType::class,
        "cbc:ApplicationStatusCode" => ApplicationStatusCodeType::class,
        "cbc:OriginalJobID" => OriginalJobIDType::class,
        "cbc:PreviousJobID" => PreviousJobIDType::class,
        "cbc:Remarks" => RemarksType::class . "[]",
        "cac:Shipment" => ShipmentType::class,
        "cac:EndorserParty" => EndorserPartyType::class . "[]",
        "cac:PreparationParty" => PartyType::class,
        "cac:IssuerParty" => PartyType::class,
        "cac:ExporterParty" => PartyType::class,
        "cac:ImporterParty" => PartyType::class,
        "cac:IssuingCountry" => CountryType::class,
        "cac:DocumentDistribution" => DocumentDistributionType::class . "[]",
        "cac:SupportingDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:Signature" => SignatureType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ReferenceID" => 1,
        "cbc:CertificateType" => 1,
        "cbc:OriginalJobID" => 1,
        "cac:Shipment" => 1,
        "cac:EndorserParty" => 1,
        "cac:PreparationParty" => 1,
        "cac:IssuerParty" => 1,
        "cac:IssuingCountry" => 1,
    ];
}