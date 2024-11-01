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
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method PlacardNotationType getPlacardNotation()
 * @method self setPlacardNotation(PlacardNotationType|string $value)
 * @method PlacardEndorsementType getPlacardEndorsement()
 * @method self setPlacardEndorsement(PlacardEndorsementType|string $value)
 * @method AdditionalInformationType[] getAdditionalInformation()
 * @method self addAdditionalInformation(AdditionalInformationType|string $value)
 * @method self setAdditionalInformation(AdditionalInformationType ...$values)
 * @method UNDGCodeType getUNDGCode()
 * @method self setUNDGCode(UNDGCodeType|string $value)
 * @method EmergencyProceduresCodeType getEmergencyProceduresCode()
 * @method self setEmergencyProceduresCode(EmergencyProceduresCodeType|string $value)
 * @method MedicalFirstAidGuideCodeType getMedicalFirstAidGuideCode()
 * @method self setMedicalFirstAidGuideCode(MedicalFirstAidGuideCodeType|string $value)
 * @method TechnicalNameType getTechnicalName()
 * @method self setTechnicalName(TechnicalNameType|string $value)
 * @method CategoryNameType getCategoryName()
 * @method self setCategoryName(CategoryNameType|string $value)
 * @method HazardousCategoryCodeType getHazardousCategoryCode()
 * @method self setHazardousCategoryCode(HazardousCategoryCodeType|string $value)
 * @method UpperOrangeHazardPlacardIDType getUpperOrangeHazardPlacardID()
 * @method self setUpperOrangeHazardPlacardID(UpperOrangeHazardPlacardIDType|string $value)
 * @method LowerOrangeHazardPlacardIDType getLowerOrangeHazardPlacardID()
 * @method self setLowerOrangeHazardPlacardID(LowerOrangeHazardPlacardIDType|string $value)
 * @method MarkingIDType getMarkingID()
 * @method self setMarkingID(MarkingIDType|string $value)
 * @method HazardClassIDType getHazardClassID()
 * @method self setHazardClassID(HazardClassIDType|string $value)
 * @method NetWeightMeasureType getNetWeightMeasure()
 * @method self setNetWeightMeasure(NetWeightMeasureType|string $value)
 * @method NetVolumeMeasureType getNetVolumeMeasure()
 * @method self setNetVolumeMeasure(NetVolumeMeasureType|string $value)
 * @method QuantityType getQuantity()
 * @method self setQuantity(QuantityType|string $value)
 * @method PartyType getContactParty()
 * @method self setContactParty(PartyType $value)
 * @method SecondaryHazardType[] getSecondaryHazard()
 * @method self addSecondaryHazard(SecondaryHazardType $value)
 * @method self setSecondaryHazard(SecondaryHazardType ...$values)
 * @method HazardousGoodsTransitType[] getHazardousGoodsTransit()
 * @method self addHazardousGoodsTransit(HazardousGoodsTransitType $value)
 * @method self setHazardousGoodsTransit(HazardousGoodsTransitType ...$values)
 * @method TemperatureType getEmergencyTemperature()
 * @method self setEmergencyTemperature(TemperatureType $value)
 * @method TemperatureType getFlashpointTemperature()
 * @method self setFlashpointTemperature(TemperatureType $value)
 * @method TemperatureType[] getAdditionalTemperature()
 * @method self addAdditionalTemperature(TemperatureType $value)
 * @method self setAdditionalTemperature(TemperatureType ...$values)
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