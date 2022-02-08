<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;

/**
 * Class DocumentResponseType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getResponse()
 * @method self setResponse($value)
 * @method mixed getDocumentReference()
 * @method self addDocumentReference($value)
 * @method self setDocumentReference($value)
 * @method mixed getIssuerParty()
 * @method self setIssuerParty($value)
 * @method mixed getRecipientParty()
 * @method self setRecipientParty($value)
 * @method mixed getLineResponse()
 * @method self addLineResponse($value)
 * @method self setLineResponse($value)
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