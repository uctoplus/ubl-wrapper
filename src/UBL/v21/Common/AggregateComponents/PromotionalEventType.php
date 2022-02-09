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
 * @method PromotionalEventTypeCodeType getPromotionalEventTypeCode()
 * @method self setPromotionalEventTypeCode(PromotionalEventTypeCodeType|string $value)
 * @method SubmissionDateType getSubmissionDate()
 * @method self setSubmissionDate(SubmissionDateType|string $value)
 * @method FirstShipmentAvailibilityDateType getFirstShipmentAvailibilityDate()
 * @method self setFirstShipmentAvailibilityDate(FirstShipmentAvailibilityDateType|string $value)
 * @method LatestProposalAcceptanceDateType getLatestProposalAcceptanceDate()
 * @method self setLatestProposalAcceptanceDate(LatestProposalAcceptanceDateType|string $value)
 * @method PromotionalSpecificationType getPromotionalSpecification()
 * @method self addPromotionalSpecification(PromotionalSpecificationType $value)
 * @method self setPromotionalSpecification(PromotionalSpecificationType ...$values)
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