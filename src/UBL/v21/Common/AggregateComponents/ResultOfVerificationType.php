<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidatorIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidationResultCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidationDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidationTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidateProcessType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidateToolType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidateToolVersionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;

/**
 *
 * @method mixed getValidatorID()
 * @method self setValidatorID($value)
 * @method mixed getValidationResultCode()
 * @method self setValidationResultCode($value)
 * @method mixed getValidationDate()
 * @method self setValidationDate($value)
 * @method mixed getValidationTime()
 * @method self setValidationTime($value)
 * @method mixed getValidateProcess()
 * @method self setValidateProcess($value)
 * @method mixed getValidateTool()
 * @method self setValidateTool($value)
 * @method mixed getValidateToolVersion()
 * @method self setValidateToolVersion($value)
 * @method mixed getSignatoryParty()
 * @method self setSignatoryParty($value)
 */
class ResultOfVerificationType extends AggregateComponent
{
    protected $casts = [
        "cbc:ValidatorID" => ValidatorIDType::class,
        "cbc:ValidationResultCode" => ValidationResultCodeType::class,
        "cbc:ValidationDate" => ValidationDateType::class,
        "cbc:ValidationTime" => ValidationTimeType::class,
        "cbc:ValidateProcess" => ValidateProcessType::class,
        "cbc:ValidateTool" => ValidateToolType::class,
        "cbc:ValidateToolVersion" => ValidateToolVersionType::class,
        "cac:SignatoryParty" => PartyType::class,
    ];

    protected $minOccurs = [
    ];
}