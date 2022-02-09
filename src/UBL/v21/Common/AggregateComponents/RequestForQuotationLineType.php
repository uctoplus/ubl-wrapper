<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OptionalLineItemIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PrivacyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SecurityClassificationCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;

/**
 * Class RequestForQuotationLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method OptionalLineItemIndicatorType getOptionalLineItemIndicator()
 * @method self setOptionalLineItemIndicator(OptionalLineItemIndicatorType|string $value)
 * @method PrivacyCodeType getPrivacyCode()
 * @method self setPrivacyCode(PrivacyCodeType|string $value)
 * @method SecurityClassificationCodeType getSecurityClassificationCode()
 * @method self setSecurityClassificationCode(SecurityClassificationCodeType|string $value)
 * @method DocumentReferenceType getDocumentReference()
 * @method self addDocumentReference(DocumentReferenceType $value)
 * @method self setDocumentReference(DocumentReferenceType ...$values)
 * @method LineItemType getLineItem()
 * @method self setLineItem(LineItemType $value)
 */
class RequestForQuotationLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:OptionalLineItemIndicator" => OptionalLineItemIndicatorType::class,
        "cbc:PrivacyCode" => PrivacyCodeType::class,
        "cbc:SecurityClassificationCode" => SecurityClassificationCodeType::class,
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:LineItem" => LineItemType::class,
    ];

    protected $minOccurs = [
        "cac:LineItem" => 1,
    ];
}