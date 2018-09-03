<?php

namespace Sicaboy\LaravelHttpProxy\Facades;

use Illuminate\Support\Facades\Facade;

class HttpProxy extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'http-proxy';
    }
}
