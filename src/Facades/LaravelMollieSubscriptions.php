<?php

namespace NoahWilderom\LaravelMollieSubscriptions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NoahWilderom\LaravelMollieSubscriptions\LaravelMollieSubscriptions
 */
class LaravelMollieSubscriptions extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \NoahWilderom\LaravelMollieSubscriptions\LaravelMollieSubscriptions::class;
    }
}
