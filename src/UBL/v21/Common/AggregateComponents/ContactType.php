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
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getTelephone()
 * @method self setTelephone($value)
 * @method mixed getTelefax()
 * @method self setTelefax($value)
 * @method mixed getElectronicMail()
 * @method self setElectronicMail($value)
 * @method mixed getNote()
 * @method self addNote($value)
 * @method self setNote($value)
 * @method mixed getOtherCommunication()
 * @method self addOtherCommunication($value)
 * @method self setOtherCommunication($value)
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