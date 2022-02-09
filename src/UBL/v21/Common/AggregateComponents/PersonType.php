<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BirthDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BirthplaceNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FamilyNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FirstNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GenderCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\JobTitleType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MiddleNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameSuffixType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NationalityIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrganizationDepartmentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OtherNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TitleType;

/**
 * Class PersonType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method FirstNameType getFirstName()
 * @method self setFirstName(FirstNameType|string $value)
 * @method FamilyNameType getFamilyName()
 * @method self setFamilyName(FamilyNameType|string $value)
 * @method TitleType getTitle()
 * @method self setTitle(TitleType|string $value)
 * @method MiddleNameType getMiddleName()
 * @method self setMiddleName(MiddleNameType|string $value)
 * @method OtherNameType getOtherName()
 * @method self setOtherName(OtherNameType|string $value)
 * @method NameSuffixType getNameSuffix()
 * @method self setNameSuffix(NameSuffixType|string $value)
 * @method JobTitleType getJobTitle()
 * @method self setJobTitle(JobTitleType|string $value)
 * @method NationalityIDType getNationalityID()
 * @method self setNationalityID(NationalityIDType|string $value)
 * @method GenderCodeType getGenderCode()
 * @method self setGenderCode(GenderCodeType|string $value)
 * @method BirthDateType getBirthDate()
 * @method self setBirthDate(BirthDateType|string $value)
 * @method BirthplaceNameType getBirthplaceName()
 * @method self setBirthplaceName(BirthplaceNameType|string $value)
 * @method OrganizationDepartmentType getOrganizationDepartment()
 * @method self setOrganizationDepartment(OrganizationDepartmentType|string $value)
 * @method ContactType getContact()
 * @method self setContact(ContactType $value)
 * @method FinancialAccountType getFinancialAccount()
 * @method self setFinancialAccount(FinancialAccountType $value)
 * @method DocumentReferenceType getIdentityDocumentReference()
 * @method self addIdentityDocumentReference(DocumentReferenceType $value)
 * @method self setIdentityDocumentReference(DocumentReferenceType ...$values)
 * @method AddressType getResidenceAddress()
 * @method self setResidenceAddress(AddressType $value)
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