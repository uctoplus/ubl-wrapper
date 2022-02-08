<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CertificateTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CertificateTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RemarksType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SignatureType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getCertificateTypeCode()
 * @method self setCertificateTypeCode($value)
 * @method mixed getCertificateType()
 * @method self setCertificateType($value)
 * @method mixed getRemarks()
 * @method self setRemarks($value)
 * @method mixed getIssuerParty()
 * @method self setIssuerParty($value)
 * @method mixed getDocumentReference()
 * @method self setDocumentReference($value)
 * @method mixed getSignature()
 * @method self setSignature($value)
 */
class CertificateType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:CertificateTypeCode" => CertificateTypeCodeType::class,
        "cbc:CertificateType" => CertificateTypeType::class,
        "cbc:Remarks" => RemarksType::class . "[]",
        "cac:IssuerParty" => PartyType::class,
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:Signature" => SignatureType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:CertificateTypeCode" => 1,
        "cbc:CertificateType" => 1,
        "cac:IssuerParty" => 1,
    ];
}