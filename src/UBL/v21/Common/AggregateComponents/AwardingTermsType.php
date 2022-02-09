<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BindingOnBuyerIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FollowupContractIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LowTendersDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PrizeDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PrizeIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TechnicalCommitteeDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WeightingAlgorithmCodeType;

/**
 * Class AwardingTermsType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method WeightingAlgorithmCodeType getWeightingAlgorithmCode()
 * @method self setWeightingAlgorithmCode(WeightingAlgorithmCodeType|string $value)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method TechnicalCommitteeDescriptionType getTechnicalCommitteeDescription()
 * @method self addTechnicalCommitteeDescription(TechnicalCommitteeDescriptionType|string $value)
 * @method self setTechnicalCommitteeDescription(TechnicalCommitteeDescriptionType ...$values)
 * @method LowTendersDescriptionType getLowTendersDescription()
 * @method self addLowTendersDescription(LowTendersDescriptionType|string $value)
 * @method self setLowTendersDescription(LowTendersDescriptionType ...$values)
 * @method PrizeIndicatorType getPrizeIndicator()
 * @method self setPrizeIndicator(PrizeIndicatorType|string $value)
 * @method PrizeDescriptionType getPrizeDescription()
 * @method self addPrizeDescription(PrizeDescriptionType|string $value)
 * @method self setPrizeDescription(PrizeDescriptionType ...$values)
 * @method PaymentDescriptionType getPaymentDescription()
 * @method self addPaymentDescription(PaymentDescriptionType|string $value)
 * @method self setPaymentDescription(PaymentDescriptionType ...$values)
 * @method FollowupContractIndicatorType getFollowupContractIndicator()
 * @method self setFollowupContractIndicator(FollowupContractIndicatorType|string $value)
 * @method BindingOnBuyerIndicatorType getBindingOnBuyerIndicator()
 * @method self setBindingOnBuyerIndicator(BindingOnBuyerIndicatorType|string $value)
 * @method AwardingCriterionType getAwardingCriterion()
 * @method self addAwardingCriterion(AwardingCriterionType $value)
 * @method self setAwardingCriterion(AwardingCriterionType ...$values)
 * @method PersonType getTechnicalCommitteePerson()
 * @method self addTechnicalCommitteePerson(PersonType $value)
 * @method self setTechnicalCommitteePerson(PersonType ...$values)
 */
class AwardingTermsType extends AggregateComponent
{
    protected $casts = [
        "cbc:WeightingAlgorithmCode" => WeightingAlgorithmCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:TechnicalCommitteeDescription" => TechnicalCommitteeDescriptionType::class . "[]",
        "cbc:LowTendersDescription" => LowTendersDescriptionType::class . "[]",
        "cbc:PrizeIndicator" => PrizeIndicatorType::class,
        "cbc:PrizeDescription" => PrizeDescriptionType::class . "[]",
        "cbc:PaymentDescription" => PaymentDescriptionType::class . "[]",
        "cbc:FollowupContractIndicator" => FollowupContractIndicatorType::class,
        "cbc:BindingOnBuyerIndicator" => BindingOnBuyerIndicatorType::class,
        "cac:AwardingCriterion" => AwardingCriterionType::class . "[]",
        "cac:TechnicalCommitteePerson" => PersonType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}