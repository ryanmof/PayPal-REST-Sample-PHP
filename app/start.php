<?php

require 'vendor/autoload.php';

define('SITE_URL', 'https://paypalrest-ryanmof.c9.io');

$paypal = new \PayPal\Rest\ApiContext (
    new \PayPal\Auth\OAuthTokenCredential(
        'AXm6xoOl9yR-xY4-r4Pe-AR1ap-hwUATm5b1SC7lXRsDSZRzzHzrJgFf40aFOa1n6VUhqyVreZr9SeER',
        'EM6x0rdQnEwCq_369fG2xNaSdwIQ0M5DX-42r_8g0uxSrQbXNzTGMBBvjHkMiX0Juv_oik8OTKQla6Q_'
        )
);
