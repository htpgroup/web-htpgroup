<?php

namespace App\Services\Napas\Resources;

use App\Services\Napas\Napas;
use ReflectionObject;
use ReflectionProperty;

class ApiResource
{
    public array $attributes = [];

    protected ?Napas $ohDear;

    public function __construct(array $attributes, Napas $ohDear = null)
    {
        $this->attributes = $attributes;

        $this->ohDear = $ohDear;

        $this->fill();
    }

    protected function fill(): void
    {
        foreach ($this->attributes as $key => $value) {
            $key = $this->camelCase($key);

            $this->{$key} = $value ? $value : '';;
        }
    }

    protected function camelCase(string $key): string
    {
        $parts = explode('_', $key);

        foreach ($parts as $i => $part) {
            if ($i !== 0) {
                $parts[$i] = ucfirst($part);
            }
        }

        return str_replace(' ', '', implode(' ', $parts));
    }

    public function __sleep()
    {
        $publicProperties = (new ReflectionObject($this))->getProperties(ReflectionProperty::IS_PUBLIC);

        $publicPropertyNames = array_map(function (ReflectionProperty $property) {
            return $property->getName();
        }, $publicProperties);

        return array_diff($publicPropertyNames, ['ohDear', 'attributes']);
    }
}
