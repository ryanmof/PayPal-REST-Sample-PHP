<?php

require 'vendor/autoload.php';

define('SITE_URL', 'https://paypalrest-ryanmof.c9.io');

$paypal = new \PayPal\Rest\ApiContext (
    new \PayPal\Auth\OAuthTokenCredential(
        '',
        ''
        )
);
