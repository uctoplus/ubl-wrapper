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
 * @method self addRemarks($value)
 * @method self setRemarks($value)
 * @method mixed getShipment()
 * @method self setShipment($value)
 * @method mixed getEndorserParty()
 * @method self addEndorserParty($value)
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
 * @method self addDocumentDistribution($value)
 * @method self setDocumentDistribution($value)
 * @method mixed getSupportingDocumentReference()
 * @method self addSupportingDocumentReference($value)
 * @method self setSupportingDocumentReference($value)
 * @method mixed getSignature()
 * @method self addSignature($value)
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