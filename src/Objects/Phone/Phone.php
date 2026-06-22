<?php

namespace MoveMoveApp\DaData\Objects\Phone;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null    $contact
 * @property string|null    $source
 * @property string|null    $qc
 * @property string|null    $type
 * @property string|null    $number
 * @property string|null    $extension
 * @property string|null    $provider
 * @property string|null    $country
 * @property string|null    $region
 * @property string|null    $city
 * @property string|null    $timezone
 * @property string|null    $country_code
 * @property string|null    $city_code
 * @property string|null    $qc_conflict
 */
class Phone extends BaseObject
{
    protected array $attributes = [
        'contact' => 'Phone\\Contact',
        'source'        => 'string|null',
        'qc'            => 'string|null',
        'type'          => 'enum:Phone\PhoneType|null',
        'number'        => 'string|null',
        'extension'     => 'string|null',
        'provider'      => 'string|null',
        'country'       => 'string|null',
        'region'        => 'string|null',
        'city'          => 'string|null',
        'timezone'      => 'string|null',
        'country_code'  => 'string|null',
        'city_code'     => 'string|null',
        'qc_conflict'   => 'string|null',
    ];
}
