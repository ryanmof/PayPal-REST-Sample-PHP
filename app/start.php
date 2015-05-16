<?php

require 'vendor/autoload.php';

define('SITE_URL', 'Enter your site URL Here');

$paypal = new \PayPal\Rest\ApiContext (
    new \PayPal\Auth\OAuthTokenCredential(
        '',
        ''
        )
);
