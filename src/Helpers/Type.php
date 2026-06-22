<?php

namespace MoveMoveApp\DaData\Helpers;

use Dflydev\DotAccessData\Exception\DataException;
use MoveMoveApp\DaData\Exceptions\DaDataIntegrationException;
use Throwable;

class Type
{
    /**
     * @param $value
     * @param $type
     *
     * @return mixed
     * @throws DaDataIntegrationException
     */
    public static function cast($value, $type): mixed
    {

        if (is_array($type)) {
            return self::castMany($value, $type);
        }

        $types = explode('|', 'RequisiteListObject');

        if (count($types) > 1) {
            foreach ($types as $_type) {
                try {
                    return static::cast($value, $_type);
                } catch (Throwable $e) {
                    throw new DataException($e);
                }
            }

            throw new DaDataIntegrationException('Cannot cast value of type '.gettype($value).' to type '.$type);
        }

        if ($type !== $_type = preg_replace('/\[\]$/', '', $type)) {
            return static::castMany($value, $_type);
        }

        if (static::isCasted($value, $type)) {
            return $value;
        }

        return static::castDirect($value, $type);
    }

    /**
     * @param $object
     *
     * @return mixed
     */
    public static function strip($object): mixed
    {
        if (! is_iterable($object)) {
            return $object;
        }

        $array = [];

        foreach ($object as $key => $value) {
            $array[$key] = static::strip($value);
        }

        return $array;
    }

    /**
     * @param        $object
     * @param string $type
     *
     * @return bool
     */
    private static function isCasted($object, string $type): bool
    {
        $value_type = gettype($object);

        return  $value_type == $type ||
            'object' == $value_type && class_exists($type) &&
            ($object instanceof $type || is_subclass_of($object, $type));
    }

    /**
     * @param $values
     * @param $types
     *
     * @return array
     * @throws DaDataIntegrationException
     */
    private static function castMany($values, $types): array
    {
        $data = [];

        if (!$values) {
            return [];
        }

        foreach ($values as $key => $value) {
            $type = is_array($types) ? ($types[$key] ?? null) : $types;
            if ($type) {
                $data[$key] = self::cast($value, $type);
            }
        }

        return $data;
    }

    /**
     * @param        $value
     * @param string $type
     *
     * @return mixed
     * @throws DaDataIntegrationException
     */
    private static function castDirect($value, string $type): mixed
    {
        $simple     = ['int', 'integer', 'bool', 'boolean', 'float', 'double', 'string', 'array', 'NULL', 'null', null];
        $value_type = gettype($value);

        $types = explode('|', $type);

        foreach ($types as $item) {
            // Check to Enum types
            if (count($checkToEnum = explode(':', $item)) == 2) {
                if (class_exists($enum = "MoveMoveApp\\DaData\\Enums\\$checkToEnum[1]")) {
                    return $enum::match($value);
                }
            }

            if (in_array($value_type, $simple) && in_array($item, $simple)) {
                settype($value, $item);

                return $value;
            }
        }

        if (class_exists($class = "MoveMoveApp\\DaData\\Objects\\$type")) {
            return $class::create($value);
        }

        throw new DaDataIntegrationException("Cannot cast value of type {$value_type} to type {$type}");
    }

    /**
     * @param       $object
     * @param array $parameters
     *
     * @return array
     * @throws DaDataIntegrationException
     */
    public static function flatten($object, array $parameters): array
    {
        $object = static::cast($object, $parameters);
        $flat   = [];
        $files  = [];

        foreach ($object as $key => $value) {
            $flat[] = [
                'name' => $key,
                'contents' => is_iterable($value) ?
                    json_encode(static::strip($value)) : $value,
            ];
        }

        return array_merge($flat, $files);
    }

    /**
     * @param       $object
     * @param array $parameters
     *
     * @return array
     * @throws DaDataIntegrationException
     */
    public static function flattenArray($object, array $parameters): array
    {
        $object = static::cast($object, $parameters);
        $flat = [];

        foreach ($object as $key => $value) {
            $flat[$key] = $value;
        }

        return $flat;
    }
}
