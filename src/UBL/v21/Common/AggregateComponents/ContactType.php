<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ElectronicMailType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TelefaxType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TelephoneType;

/**
 * Class ContactType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method TelephoneType getTelephone()
 * @method self setTelephone(TelephoneType|string $value)
 * @method TelefaxType getTelefax()
 * @method self setTelefax(TelefaxType|string $value)
 * @method ElectronicMailType getElectronicMail()
 * @method self setElectronicMail(ElectronicMailType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method CommunicationType getOtherCommunication()
 * @method self addOtherCommunication(CommunicationType $value)
 * @method self setOtherCommunication(CommunicationType ...$values)
 */
class ContactType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Name" => NameType::class,
        "cbc:Telephone" => TelephoneType::class,
        "cbc:Telefax" => TelefaxType::class,
        "cbc:ElectronicMail" => ElectronicMailType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cac:OtherCommunication" => CommunicationType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}