<?php

namespace MoveMoveApp\DaData\Objects\Bank;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string $value
 * @property string $unrestricted_value
 * @property Bank $data
 */
class Suggestions extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string',
        'unrestricted_value'    => 'string',
        'data'                  => 'Bank\\Bank',
    ];
}
