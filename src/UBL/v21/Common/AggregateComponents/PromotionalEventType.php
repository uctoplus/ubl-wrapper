<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FirstShipmentAvailibilityDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestProposalAcceptanceDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PromotionalEventTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SubmissionDateType;

/**
 * Class PromotionalEventType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getPromotionalEventTypeCode()
 * @method self setPromotionalEventTypeCode($value)
 * @method mixed getSubmissionDate()
 * @method self setSubmissionDate($value)
 * @method mixed getFirstShipmentAvailibilityDate()
 * @method self setFirstShipmentAvailibilityDate($value)
 * @method mixed getLatestProposalAcceptanceDate()
 * @method self setLatestProposalAcceptanceDate($value)
 * @method mixed getPromotionalSpecification()
 * @method self addPromotionalSpecification($value)
 * @method self setPromotionalSpecification($value)
 */
class PromotionalEventType extends AggregateComponent
{
    protected $casts = [
        "cbc:PromotionalEventTypeCode" => PromotionalEventTypeCodeType::class,
        "cbc:SubmissionDate" => SubmissionDateType::class,
        "cbc:FirstShipmentAvailibilityDate" => FirstShipmentAvailibilityDateType::class,
        "cbc:LatestProposalAcceptanceDate" => LatestProposalAcceptanceDateType::class,
        "cac:PromotionalSpecification" => PromotionalSpecificationType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:PromotionalEventTypeCode" => 1,
        "cac:PromotionalSpecification" => 1,
    ];
}