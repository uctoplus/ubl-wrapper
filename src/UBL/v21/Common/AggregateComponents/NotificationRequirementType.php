<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NotificationTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PostEventNotificationDurationMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreEventNotificationDurationMeasureType;

/**
 * Class NotificationRequirementType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getNotificationTypeCode()
 * @method self setNotificationTypeCode($value)
 * @method mixed getPostEventNotificationDurationMeasure()
 * @method self setPostEventNotificationDurationMeasure($value)
 * @method mixed getPreEventNotificationDurationMeasure()
 * @method self setPreEventNotificationDurationMeasure($value)
 * @method mixed getNotifyParty()
 * @method self addNotifyParty($value)
 * @method self setNotifyParty($value)
 * @method mixed getNotificationPeriod()
 * @method self addNotificationPeriod($value)
 * @method self setNotificationPeriod($value)
 * @method mixed getNotificationLocation()
 * @method self addNotificationLocation($value)
 * @method self setNotificationLocation($value)
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