<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CertificateTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CertificateTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RemarksType;

/**
 * Class CertificateType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method CertificateTypeCodeType getCertificateTypeCode()
 * @method self setCertificateTypeCode(CertificateTypeCodeType|string $value)
 * @method CertificateTypeType getCertificateType()
 * @method self setCertificateType(CertificateTypeType|string $value)
 * @method RemarksType getRemarks()
 * @method self addRemarks(RemarksType|string $value)
 * @method self setRemarks(RemarksType ...$values)
 * @method PartyType getIssuerParty()
 * @method self setIssuerParty(PartyType $value)
 * @method DocumentReferenceType getDocumentReference()
 * @method self addDocumentReference(DocumentReferenceType $value)
 * @method self setDocumentReference(DocumentReferenceType ...$values)
 * @method SignatureType getSignature()
 * @method self addSignature(SignatureType $value)
 * @method self setSignature(SignatureType ...$values)
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