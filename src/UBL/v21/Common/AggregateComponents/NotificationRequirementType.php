<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NotificationTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PostEventNotificationDurationMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreEventNotificationDurationMeasureType;

/**
 * Class NotificationRequirementType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method NotificationTypeCodeType getNotificationTypeCode()
 * @method self setNotificationTypeCode(NotificationTypeCodeType|string $value)
 * @method PostEventNotificationDurationMeasureType getPostEventNotificationDurationMeasure()
 * @method self setPostEventNotificationDurationMeasure(PostEventNotificationDurationMeasureType|string $value)
 * @method PreEventNotificationDurationMeasureType getPreEventNotificationDurationMeasure()
 * @method self setPreEventNotificationDurationMeasure(PreEventNotificationDurationMeasureType|string $value)
 * @method PartyType[] getNotifyParty()
 * @method self addNotifyParty(PartyType $value)
 * @method self setNotifyParty(PartyType ...$values)
 * @method PeriodType[] getNotificationPeriod()
 * @method self addNotificationPeriod(PeriodType $value)
 * @method self setNotificationPeriod(PeriodType ...$values)
 * @method LocationType[] getNotificationLocation()
 * @method self addNotificationLocation(LocationType $value)
 * @method self setNotificationLocation(LocationType ...$values)
 */
class NotificationRequirementType extends AggregateComponent
{
    protected $casts = [
        "cbc:NotificationTypeCode" => NotificationTypeCodeType::class,
        "cbc:PostEventNotificationDurationMeasure" => PostEventNotificationDurationMeasureType::class,
        "cbc:PreEventNotificationDurationMeasure" => PreEventNotificationDurationMeasureType::class,
        "cac:NotifyParty" => PartyType::class . "[]",
        "cac:NotificationPeriod" => PeriodType::class . "[]",
        "cac:NotificationLocation" => LocationType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:NotificationTypeCode" => 1,
    ];
}