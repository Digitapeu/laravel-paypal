<?php

namespace Digitap\PayPal;

use Digitap\PayPal\Services\AdaptivePayments;
use Digitap\PayPal\Services\ExpressCheckout;

class PayPalFacadeAccessor
{
    /**
     * PayPal API provider object.
     *
     * @var
     */
    public static $provider;

    /**
     * Get specific PayPal API provider object to use.
     *
     * @return ExpressCheckout|AdaptivePayments
     */
    public static function getProvider()
    {
        if (empty(self::$provider)) {
            return new ExpressCheckout();
        } else {
            return self::$provider;
        }
    }

    /**
     * Set specific PayPal API to use.
     *
     * @param string $option
     *
     * @return ExpressCheckout|AdaptivePayments
     */
    public static function setProvider($option = '')
    {
        // Set default provider.
        if (empty($option) || ($option != 'adaptive_payments') || ($option == 'express_checkout')) {
            self::$provider = new ExpressCheckout();
        } else {
            self::$provider = new AdaptivePayments();
        }

        return self::getProvider();
    }
}
