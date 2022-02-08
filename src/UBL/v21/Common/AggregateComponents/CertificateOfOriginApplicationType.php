<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReferenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CertificateTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ApplicationStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OriginalJobIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreviousJobIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RemarksType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ShipmentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\EndorserPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CountryType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentDistributionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SignatureType;

/**
 *
 * @method mixed getReferenceID()
 * @method self setReferenceID($value)
 * @method mixed getCertificateType()
 * @method self setCertificateType($value)
 * @method mixed getApplicationStatusCode()
 * @method self setApplicationStatusCode($value)
 * @method mixed getOriginalJobID()
 * @method self setOriginalJobID($value)
 * @method mixed getPreviousJobID()
 * @method self setPreviousJobID($value)
 * @method mixed getRemarks()
 * @method self setRemarks($value)
 * @method mixed getShipment()
 * @method self setShipment($value)
 * @method mixed getEndorserParty()
 * @method self setEndorserParty($value)
 * @method mixed getPreparationParty()
 * @method self setPreparationParty($value)
 * @method mixed getIssuerParty()
 * @method self setIssuerParty($value)
 * @method mixed getExporterParty()
 * @method self setExporterParty($value)
 * @method mixed getImporterParty()
 * @method self setImporterParty($value)
 * @method mixed getIssuingCountry()
 * @method self setIssuingCountry($value)
 * @method mixed getDocumentDistribution()
 * @method self setDocumentDistribution($value)
 * @method mixed getSupportingDocumentReference()
 * @method self setSupportingDocumentReference($value)
 * @method mixed getSignature()
 * @method self setSignature($value)
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