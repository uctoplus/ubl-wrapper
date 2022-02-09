<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChangeConditionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportServiceProviderSpecialTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportUserSpecialTermsType;

/**
 * Class TransportExecutionTermsType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method TransportUserSpecialTermsType getTransportUserSpecialTerms()
 * @method self addTransportUserSpecialTerms(TransportUserSpecialTermsType|string $value)
 * @method self setTransportUserSpecialTerms(TransportUserSpecialTermsType ...$values)
 * @method TransportServiceProviderSpecialTermsType getTransportServiceProviderSpecialTerms()
 * @method self addTransportServiceProviderSpecialTerms(TransportServiceProviderSpecialTermsType|string $value)
 * @method self setTransportServiceProviderSpecialTerms(TransportServiceProviderSpecialTermsType ...$values)
 * @method ChangeConditionsType getChangeConditions()
 * @method self addChangeConditions(ChangeConditionsType|string $value)
 * @method self setChangeConditions(ChangeConditionsType ...$values)
 * @method PaymentTermsType getPaymentTerms()
 * @method self addPaymentTerms(PaymentTermsType $value)
 * @method self setPaymentTerms(PaymentTermsType ...$values)
 * @method DeliveryTermsType getDeliveryTerms()
 * @method self addDeliveryTerms(DeliveryTermsType $value)
 * @method self setDeliveryTerms(DeliveryTermsType ...$values)
 * @method PaymentTermsType getBonusPaymentTerms()
 * @method self setBonusPaymentTerms(PaymentTermsType $value)
 * @method PaymentTermsType getCommissionPaymentTerms()
 * @method self setCommissionPaymentTerms(PaymentTermsType $value)
 * @method PaymentTermsType getPenaltyPaymentTerms()
 * @method self setPenaltyPaymentTerms(PaymentTermsType $value)
 * @method EnvironmentalEmissionType getEnvironmentalEmission()
 * @method self addEnvironmentalEmission(EnvironmentalEmissionType $value)
 * @method self setEnvironmentalEmission(EnvironmentalEmissionType ...$values)
 * @method NotificationRequirementType getNotificationRequirement()
 * @method self addNotificationRequirement(NotificationRequirementType $value)
 * @method self setNotificationRequirement(NotificationRequirementType ...$values)
 * @method PaymentTermsType getServiceChargePaymentTerms()
 * @method self setServiceChargePaymentTerms(PaymentTermsType $value)
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