<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;

/**
 * Class AppealTermsType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method PeriodType getPresentationPeriod()
 * @method self setPresentationPeriod(PeriodType $value)
 * @method PartyType getAppealInformationParty()
 * @method self setAppealInformationParty(PartyType $value)
 * @method PartyType getAppealReceiverParty()
 * @method self setAppealReceiverParty(PartyType $value)
 * @method PartyType getMediationParty()
 * @method self setMediationParty(PartyType $value)
 */
class AppealTermsType extends AggregateComponent
{
    protected $casts = [
        "cbc:Description" => DescriptionType::class . "[]",
        "cac:PresentationPeriod" => PeriodType::class,
        "cac:AppealInformationParty" => PartyType::class,
        "cac:AppealReceiverParty" => PartyType::class,
        "cac:MediationParty" => PartyType::class,
    ];

    protected $minOccurs = [
    ];
}