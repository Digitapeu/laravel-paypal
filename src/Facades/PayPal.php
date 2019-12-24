<?php

namespace Digitap\PayPal\Facades;

/*
 * Class Facade
 * @package Digitap\PayPal\Facades
 * @see Digitap\PayPal\ExpressCheckout
 */

use Illuminate\Support\Facades\Facade;

class PayPal extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Digitap\PayPal\PayPalFacadeAccessor';
    }
}
