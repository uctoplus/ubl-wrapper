<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidateProcessType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidateToolType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidateToolVersionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidationDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidationResultCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidationTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidatorIDType;

/**
 * Class ResultOfVerificationType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ValidatorIDType getValidatorID()
 * @method self setValidatorID(ValidatorIDType|string $value)
 * @method ValidationResultCodeType getValidationResultCode()
 * @method self setValidationResultCode(ValidationResultCodeType|string $value)
 * @method ValidationDateType getValidationDate()
 * @method self setValidationDate(ValidationDateType|string $value)
 * @method ValidationTimeType getValidationTime()
 * @method self setValidationTime(ValidationTimeType|string $value)
 * @method ValidateProcessType getValidateProcess()
 * @method self setValidateProcess(ValidateProcessType|string $value)
 * @method ValidateToolType getValidateTool()
 * @method self setValidateTool(ValidateToolType|string $value)
 * @method ValidateToolVersionType getValidateToolVersion()
 * @method self setValidateToolVersion(ValidateToolVersionType|string $value)
 * @method PartyType getSignatoryParty()
 * @method self setSignatoryParty(PartyType $value)
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