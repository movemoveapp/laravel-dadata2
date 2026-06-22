<?php

namespace MoveMoveApp\DaData\Objects\Organization\Ru;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property integer $inn
 * @property integer|null $kpp
 * @property integer|null $ogrn
 * @property string|null $ogrn_date
 * @property string|null $hid
 * @property string $type
 * @property Name|null $name
 * @property Fio|null $fio
 * @property string|null $okato
 * @property string|null $oktmo
 * @property string|null $okpo
 * @property string|null $okogu
 * @property string|null $okfs
 * @property string|null $okved
 * @property string|null $okved_type
 * @property Opf|null $opf
 * @property Okveds[]|null $okveds
 * @property Management[] $management
 * @property integer|null $branch_count
 * @property string|null $branch_type
 * @property Address|null $address
 * @property State|null $state
 * @property integer|null $employee_count
 * @property Finance|null $finance
 * @property Authorities|null $authorities
 * @property Citizenship|null $citizenship
 * @property Founder[]|null $founders
 * @property Manager[]|null $managers
 * @property Predecessor|null $predecessors
 * @property Successor[]|null $successors
 * @property Capital|null $capital
 * @property boolean|null $invalid
 * @property Document|null $documents
 * @property License|null $licenses
 * @property OrganizationPhone[]|null $phones
 * @property OrganizationEmail[]|null $emails
 */
class Organization extends BaseObject
{
    protected array $attributes = [
        'inn'               => 'integer|null',
        'kpp'               => 'integer|null',
        'ogrn'              => 'integer|null',
        'ogrn_date'         => 'string|null',
        'hid'               => 'string|null',
        'type'              => 'string',
        'name'              => 'Organization\\Ru\\CleanName',
        'fio'               => 'Organization\\Ru\\Fio',
        'okato'             => 'string|null',
        'oktmo'             => 'string|null',
        'okpo'              => 'string|null',
        'okogu'             => 'string|null',
        'okfs'              => 'string|null',
        'okved'             => 'string|null',
        'okved_type'        => 'string|null',
        'opf'               => 'Organization\\Ru\\Opf',
        'okveds'            => 'Organization\\Ru\\Okveds[]',
        'management'        => 'Organization\\Ru\\Management',
        'branch_count'      => 'integer|null',
        'branch_type'       => 'string|null',
        'address'           => 'Organization\\Ru\\Address',
        'state'             => 'Organization\\Ru\\State',
        'employee_count'    => 'integer|null',
        'finance'           => 'Organization\\Ru\\Finance',
        'authorities'       => 'Organization\\Ru\\Authorities',
        'citizenship'       => 'Organization\\Ru\\Citizenship',
        'founders'          => 'Organization\\Ru\\Founder[]',
        'managers'          => 'Organization\\Ru\\Manager[]',
        'predecessors'      => 'Organization\\Ru\\Predecessor[]',
        'successors'        => 'Organization\\Ru\\Successor[]',
        'capital'           => 'Organization\\Ru\\Capital',
        'invalid'           => 'boolean',
        'documents'         => 'Organization\\Ru\\Document',
        'licenses'          => 'Organization\\Ru\\License[]',
        'phones'            => 'Organization\\Ru\\OrganizationPhone[]',
        'emails'            => 'Organization\\Ru\\OrganizationEmail[]',
    ];
}
