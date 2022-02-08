<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VariantIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FeeAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FeeDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TenderEnvelopeIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TenderEnvelopeTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ProcurementProjectLotType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TaxTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\MonetaryTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TenderLineType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AwardingCriterionResponseType;

/**
 *
 * @method mixed getVariantID()
 * @method self setVariantID($value)
 * @method mixed getFeeAmount()
 * @method self setFeeAmount($value)
 * @method mixed getFeeDescription()
 * @method self setFeeDescription($value)
 * @method mixed getTenderEnvelopeID()
 * @method self setTenderEnvelopeID($value)
 * @method mixed getTenderEnvelopeTypeCode()
 * @method self setTenderEnvelopeTypeCode($value)
 * @method mixed getProcurementProjectLot()
 * @method self setProcurementProjectLot($value)
 * @method mixed getEvidenceDocumentReference()
 * @method self setEvidenceDocumentReference($value)
 * @method mixed getTaxTotal()
 * @method self setTaxTotal($value)
 * @method mixed getLegalMonetaryTotal()
 * @method self setLegalMonetaryTotal($value)
 * @method mixed getTenderLine()
 * @method self setTenderLine($value)
 * @method mixed getAwardingCriterionResponse()
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