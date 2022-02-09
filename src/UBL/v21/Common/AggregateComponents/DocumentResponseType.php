<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;

/**
 * Class DocumentResponseType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ResponseType getResponse()
 * @method self setResponse(ResponseType $value)
 * @method DocumentReferenceType getDocumentReference()
 * @method self addDocumentReference(DocumentReferenceType $value)
 * @method self setDocumentReference(DocumentReferenceType ...$values)
 * @method PartyType getIssuerParty()
 * @method self setIssuerParty(PartyType $value)
 * @method PartyType getRecipientParty()
 * @method self setRecipientParty(PartyType $value)
 * @method LineResponseType getLineResponse()
 * @method self addLineResponse(LineResponseType $value)
 * @method self setLineResponse(LineResponseType ...$values)
 */
class DocumentResponseType extends AggregateComponent
{
    protected $casts = [
        "cac:Response" => ResponseType::class,
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:IssuerParty" => PartyType::class,
        "cac:RecipientParty" => PartyType::class,
        "cac:LineResponse" => LineResponseType::class . "[]",
    ];

    protected $minOccurs = [
        "cac:Response" => 1,
        "cac:DocumentReference" => 1,
    ];
}