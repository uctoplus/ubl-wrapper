<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FeeAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FeeDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TenderEnvelopeIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TenderEnvelopeTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VariantIDType;

/**
 * Class TenderedProjectType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getVariantID()
 * @method self setVariantID($value)
 * @method mixed getFeeAmount()
 * @method self setFeeAmount($value)
 * @method mixed getFeeDescription()
 * @method self addFeeDescription($value)
 * @method self setFeeDescription($value)
 * @method mixed getTenderEnvelopeID()
 * @method self setTenderEnvelopeID($value)
 * @method mixed getTenderEnvelopeTypeCode()
 * @method self setTenderEnvelopeTypeCode($value)
 * @method mixed getProcurementProjectLot()
 * @method self setProcurementProjectLot($value)
 * @method mixed getEvidenceDocumentReference()
 * @method self addEvidenceDocumentReference($value)
 * @method self setEvidenceDocumentReference($value)
 * @method mixed getTaxTotal()
 * @method self addTaxTotal($value)
 * @method self setTaxTotal($value)
 * @method mixed getLegalMonetaryTotal()
 * @method self setLegalMonetaryTotal($value)
 * @method mixed getTenderLine()
 * @method self addTenderLine($value)
 * @method self setTenderLine($value)
 * @method mixed getAwardingCriterionResponse()
 * @method self addAwardingCriterionResponse($value)
 * @method self setAwardingCriterionResponse($value)
 */
class TenderedProjectType extends AggregateComponent
{
    protected $casts = [
        "cbc:VariantID" => VariantIDType::class,
        "cbc:FeeAmount" => FeeAmountType::class,
        "cbc:FeeDescription" => FeeDescriptionType::class . "[]",
        "cbc:TenderEnvelopeID" => TenderEnvelopeIDType::class,
        "cbc:TenderEnvelopeTypeCode" => TenderEnvelopeTypeCodeType::class,
        "cac:ProcurementProjectLot" => ProcurementProjectLotType::class,
        "cac:EvidenceDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:TaxTotal" => TaxTotalType::class . "[]",
        "cac:LegalMonetaryTotal" => MonetaryTotalType::class,
        "cac:TenderLine" => TenderLineType::class . "[]",
        "cac:AwardingCriterionResponse" => AwardingCriterionResponseType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}