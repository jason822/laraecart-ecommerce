<?php

namespace Laraecart\Ecommerce\Facades;

use Illuminate\Support\Facades\Facade;

class Ecommerce extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laraecart.ecommerce';
    }
}
