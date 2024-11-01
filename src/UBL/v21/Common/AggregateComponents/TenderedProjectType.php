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
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method VariantIDType getVariantID()
 * @method self setVariantID(VariantIDType|string $value)
 * @method FeeAmountType getFeeAmount()
 * @method self setFeeAmount(FeeAmountType|string $value)
 * @method FeeDescriptionType[] getFeeDescription()
 * @method self addFeeDescription(FeeDescriptionType|string $value)
 * @method self setFeeDescription(FeeDescriptionType ...$values)
 * @method TenderEnvelopeIDType getTenderEnvelopeID()
 * @method self setTenderEnvelopeID(TenderEnvelopeIDType|string $value)
 * @method TenderEnvelopeTypeCodeType getTenderEnvelopeTypeCode()
 * @method self setTenderEnvelopeTypeCode(TenderEnvelopeTypeCodeType|string $value)
 * @method ProcurementProjectLotType getProcurementProjectLot()
 * @method self setProcurementProjectLot(ProcurementProjectLotType $value)
 * @method DocumentReferenceType[] getEvidenceDocumentReference()
 * @method self addEvidenceDocumentReference(DocumentReferenceType $value)
 * @method self setEvidenceDocumentReference(DocumentReferenceType ...$values)
 * @method TaxTotalType[] getTaxTotal()
 * @method self addTaxTotal(TaxTotalType $value)
 * @method self setTaxTotal(TaxTotalType ...$values)
 * @method MonetaryTotalType getLegalMonetaryTotal()
 * @method self setLegalMonetaryTotal(MonetaryTotalType $value)
 * @method TenderLineType[] getTenderLine()
 * @method self addTenderLine(TenderLineType $value)
 * @method self setTenderLine(TenderLineType ...$values)
 * @method AwardingCriterionResponseType[] getAwardingCriterionResponse()
 * @method self addAwardingCriterionResponse(AwardingCriterionResponseType $value)
 * @method self setAwardingCriterionResponse(AwardingCriterionResponseType ...$values)
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