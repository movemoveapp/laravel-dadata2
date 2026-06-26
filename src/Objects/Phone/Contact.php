<?php

namespace MoveMoveApp\DaData\Objects\Phone;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null $type
 * @property string|null $name
 */
class Contact extends BaseObject
{
    protected array $attributes = [
        'type' => 'string|null',
        'name' => 'string|null',
    ];
}