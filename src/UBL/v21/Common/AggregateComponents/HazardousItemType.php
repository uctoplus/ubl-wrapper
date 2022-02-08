<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AdditionalInformationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CategoryNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EmergencyProceduresCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HazardClassIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HazardousCategoryCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LowerOrangeHazardPlacardIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MarkingIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MedicalFirstAidGuideCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetVolumeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PlacardEndorsementType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PlacardNotationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TechnicalNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UNDGCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UpperOrangeHazardPlacardIDType;

/**
 * Class HazardousItemType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getPlacardNotation()
 * @method self setPlacardNotation($value)
 * @method mixed getPlacardEndorsement()
 * @method self setPlacardEndorsement($value)
 * @method mixed getAdditionalInformation()
 * @method self addAdditionalInformation($value)
 * @method self setAdditionalInformation($value)
 * @method mixed getUNDGCode()
 * @method self setUNDGCode($value)
 * @method mixed getEmergencyProceduresCode()
 * @method self setEmergencyProceduresCode($value)
 * @method mixed getMedicalFirstAidGuideCode()
 * @method self setMedicalFirstAidGuideCode($value)
 * @method mixed getTechnicalName()
 * @method self setTechnicalName($value)
 * @method mixed getCategoryName()
 * @method self setCategoryName($value)
 * @method mixed getHazardousCategoryCode()
 * @method self setHazardousCategoryCode($value)
 * @method mixed getUpperOrangeHazardPlacardID()
 * @method self setUpperOrangeHazardPlacardID($value)
 * @method mixed getLowerOrangeHazardPlacardID()
 * @method self setLowerOrangeHazardPlacardID($value)
 * @method mixed getMarkingID()
 * @method self setMarkingID($value)
 * @method mixed getHazardClassID()
 * @method self setHazardClassID($value)
 * @method mixed getNetWeightMeasure()
 * @method self setNetWeightMeasure($value)
 * @method mixed getNetVolumeMeasure()
 * @method self setNetVolumeMeasure($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getContactParty()
 * @method self setContactParty($value)
 * @method mixed getSecondaryHazard()
 * @method self addSecondaryHazard($value)
 * @method self setSecondaryHazard($value)
 * @method mixed getHazardousGoodsTransit()
 * @method self addHazardousGoodsTransit($value)
 * @method self setHazardousGoodsTransit($value)
 * @method mixed getEmergencyTemperature()
 * @method self setEmergencyTemperature($value)
 * @method mixed getFlashpointTemperature()
 * @method self setFlashpointTemperature($value)
 * @method mixed getAdditionalTemperature()
 * @method self addAdditionalTemperature($value)
 * @method self setAdditionalTemperature($value)
 */
class HazardousItemType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:PlacardNotation" => PlacardNotationType::class,
        "cbc:PlacardEndorsement" => PlacardEndorsementType::class,
        "cbc:AdditionalInformation" => AdditionalInformationType::class . "[]",
        "cbc:UNDGCode" => UNDGCodeType::class,
        "cbc:EmergencyProceduresCode" => EmergencyProceduresCodeType::class,
        "cbc:MedicalFirstAidGuideCode" => MedicalFirstAidGuideCodeType::class,
        "cbc:TechnicalName" => TechnicalNameType::class,
        "cbc:CategoryName" => CategoryNameType::class,
        "cbc:HazardousCategoryCode" => HazardousCategoryCodeType::class,
        "cbc:UpperOrangeHazardPlacardID" => UpperOrangeHazardPlacardIDType::class,
        "cbc:LowerOrangeHazardPlacardID" => LowerOrangeHazardPlacardIDType::class,
        "cbc:MarkingID" => MarkingIDType::class,
        "cbc:HazardClassID" => HazardClassIDType::class,
        "cbc:NetWeightMeasure" => NetWeightMeasureType::class,
        "cbc:NetVolumeMeasure" => NetVolumeMeasureType::class,
        "cbc:Quantity" => QuantityType::class,
        "cac:ContactParty" => PartyType::class,
        "cac:SecondaryHazard" => SecondaryHazardType::class . "[]",
        "cac:HazardousGoodsTransit" => HazardousGoodsTransitType::class . "[]",
        "cac:EmergencyTemperature" => TemperatureType::class,
        "cac:FlashpointTemperature" => TemperatureType::class,
        "cac:AdditionalTemperature" => TemperatureType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}