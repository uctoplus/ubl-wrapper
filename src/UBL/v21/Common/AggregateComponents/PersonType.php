<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FirstNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FamilyNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TitleType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MiddleNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OtherNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameSuffixType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\JobTitleType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NationalityIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GenderCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BirthDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BirthplaceNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrganizationDepartmentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ContactType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\FinancialAccountType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AddressType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getFirstName()
 * @method self setFirstName($value)
 * @method mixed getFamilyName()
 * @method self setFamilyName($value)
 * @method mixed getTitle()
 * @method self setTitle($value)
 * @method mixed getMiddleName()
 * @method self setMiddleName($value)
 * @method mixed getOtherName()
 * @method self setOtherName($value)
 * @method mixed getNameSuffix()
 * @method self setNameSuffix($value)
 * @method mixed getJobTitle()
 * @method self setJobTitle($value)
 * @method mixed getNationalityID()
 * @method self setNationalityID($value)
 * @method mixed getGenderCode()
 * @method self setGenderCode($value)
 * @method mixed getBirthDate()
 * @method self setBirthDate($value)
 * @method mixed getBirthplaceName()
 * @method self setBirthplaceName($value)
 * @method mixed getOrganizationDepartment()
 * @method self setOrganizationDepartment($value)
 * @method mixed getContact()
 * @method self setContact($value)
 * @method mixed getFinancialAccount()
 * @method self setFinancialAccount($value)
 * @method mixed getIdentityDocumentReference()
 * @method self setIdentityDocumentReference($value)
 * @method mixed getResidenceAddress()
 * @method self setResidenceAddress($value)
 */
class PersonType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:FirstName" => FirstNameType::class,
        "cbc:FamilyName" => FamilyNameType::class,
        "cbc:Title" => TitleType::class,
        "cbc:MiddleName" => MiddleNameType::class,
        "cbc:OtherName" => OtherNameType::class,
        "cbc:NameSuffix" => NameSuffixType::class,
        "cbc:JobTitle" => JobTitleType::class,
        "cbc:NationalityID" => NationalityIDType::class,
        "cbc:GenderCode" => GenderCodeType::class,
        "cbc:BirthDate" => BirthDateType::class,
        "cbc:BirthplaceName" => BirthplaceNameType::class,
        "cbc:OrganizationDepartment" => OrganizationDepartmentType::class,
        "cac:Contact" => ContactType::class,
        "cac:FinancialAccount" => FinancialAccountType::class,
        "cac:IdentityDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:ResidenceAddress" => AddressType::class,
    ];

    protected $minOccurs = [
    ];
}