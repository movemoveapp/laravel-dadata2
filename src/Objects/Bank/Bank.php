<?php

namespace MoveMoveApp\DaData\Objects\Bank;

use MoveMoveApp\DaData\Objects\Address\Address;
use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property Opf $opf
 * @property Name $name
 * @property string|null $bic
 * @property string|null $swift
 * @property string|null $inn
 * @property string|null $kpp
 * @property string|null $okpo
 * @property string|null $correspondent_account
 * @property string|null $treasury_accounts
 * @property string|null $registration_number
 * @property string|null $payment_city
 * @property State $state
 * @property string|null $rkc
 * @property Bank $cbr
 * @property Address $address
 * @property string|null $phones
 */
class Bank extends BaseObject
{
    protected array $attributes = [
        'opf'                   => 'Bank\\Opf',
        'name'                  => 'Bank\\Name',
        'bic'                   => 'string|null',
        'swift'                 => 'string|null',
        'inn'                   => 'string|null',
        'kpp'                   => 'string|null',
        'okpo'                  => 'string|null',
        'correspondent_account' => 'string|null',
        'treasury_accounts'     => 'array|null',
        'registration_number'   => 'string|null',
        'payment_city'          => 'string|null',
        'state'                 => 'Bank\\State',
        'rkc'                   => 'string|null',
        'cbr'                   => 'Bank\\Cbr',
        'address'               => 'Address\\Suggest',
        'phones'                => 'string|null',
    ];
}
