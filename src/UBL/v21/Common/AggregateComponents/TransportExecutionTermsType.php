<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportUserSpecialTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportServiceProviderSpecialTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChangeConditionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PaymentTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\EnvironmentalEmissionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\NotificationRequirementType;

/**
 *
 * @method mixed getTransportUserSpecialTerms()
 * @method self setTransportUserSpecialTerms($value)
 * @method mixed getTransportServiceProviderSpecialTerms()
 * @method self setTransportServiceProviderSpecialTerms($value)
 * @method mixed getChangeConditions()
 * @method self setChangeConditions($value)
 * @method mixed getPaymentTerms()
 * @method self setPaymentTerms($value)
 * @method mixed getDeliveryTerms()
 * @method self setDeliveryTerms($value)
 * @method mixed getBonusPaymentTerms()
 * @method self setBonusPaymentTerms($value)
 * @method mixed getCommissionPaymentTerms()
 * @method self setCommissionPaymentTerms($value)
 * @method mixed getPenaltyPaymentTerms()
 * @method self setPenaltyPaymentTerms($value)
 * @method mixed getEnvironmentalEmission()
 * @method self setEnvironmentalEmission($value)
 * @method mixed getNotificationRequirement()
 * @method self setNotificationRequirement($value)
 * @method mixed getServiceChargePaymentTerms()
 * @method self setServiceChargePaymentTerms($value)
 */
class TransportExecutionTermsType extends AggregateComponent
{
    protected $casts = [
        "cbc:TransportUserSpecialTerms" => TransportUserSpecialTermsType::class . "[]",
        "cbc:TransportServiceProviderSpecialTerms" => TransportServiceProviderSpecialTermsType::class . "[]",
        "cbc:ChangeConditions" => ChangeConditionsType::class . "[]",
        "cac:PaymentTerms" => PaymentTermsType::class . "[]",
        "cac:DeliveryTerms" => DeliveryTermsType::class . "[]",
        "cac:BonusPaymentTerms" => PaymentTermsType::class,
        "cac:CommissionPaymentTerms" => PaymentTermsType::class,
        "cac:PenaltyPaymentTerms" => PaymentTermsType::class,
        "cac:EnvironmentalEmission" => EnvironmentalEmissionType::class . "[]",
        "cac:NotificationRequirement" => NotificationRequirementType::class . "[]",
        "cac:ServiceChargePaymentTerms" => PaymentTermsType::class,
    ];

    protected $minOccurs = [
    ];
}