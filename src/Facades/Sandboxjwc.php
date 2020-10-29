<?php

namespace Victorycto\Sandboxjwc\Facades;

use Illuminate\Support\Facades\Facade;

class Sandboxjwc extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'package';
    }
}
