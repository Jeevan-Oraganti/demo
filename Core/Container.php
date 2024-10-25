<?php

namespace Core;

use Exception;

class Container
{
    protected $bindings = [];

    public function bind($key, $value)
    {
        $this->bindings[$key] = $value;
    }

    public function resolve($key)
    {
        if (isset($this->bindings[$key])) {
            return $this->bindings[$key];
        }

        throw new Exception("No binding found for key: {$key}");
    }
}