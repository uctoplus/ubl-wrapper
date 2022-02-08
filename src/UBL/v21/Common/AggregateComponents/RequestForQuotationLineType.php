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
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getNote()
 * @method self addNote($value)
 * @method self setNote($value)
 * @method mixed getOptionalLineItemIndicator()
 * @method self setOptionalLineItemIndicator($value)
 * @method mixed getPrivacyCode()
 * @method self setPrivacyCode($value)
 * @method mixed getSecurityClassificationCode()
 * @method self setSecurityClassificationCode($value)
 * @method mixed getDocumentReference()
 * @method self addDocumentReference($value)
 * @method self setDocumentReference($value)
 * @method mixed getLineItem()
 * @method self setLineItem($value)
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