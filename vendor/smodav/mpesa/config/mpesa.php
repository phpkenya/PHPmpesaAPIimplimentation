<?php


return [


    /*
    |--------------------------------------------------------------------------
    | Demo
    |--------------------------------------------------------------------------
    |
    | This is a flag to set the API in demo mode and use the demo timestamp
    | and password. When demo is set to true, set the paybill number to 898998
    |
    | Default: true
    |
    */

    'demo' => true,
    /*
    |--------------------------------------------------------------------------
    | API Endpoint
    |--------------------------------------------------------------------------
    |
    | This is the default Safaricom API endpoint to be queried for transactional
    | requests.
    |
    | Default: "https://safaricom.co.ke/mpesa_online/lnmo_checkout_server.php?wsdl"
    |
    */

    'endpoint' => "https://safaricom.co.ke/mpesa_online/lnmo_checkout_server.php?wsdl",
    //'endpoint' => "https://localhost:8080/mpesatest/",

    /*
    |--------------------------------------------------------------------------
    | Callback URL
    |--------------------------------------------------------------------------
    |
    | This is a fully qualified endpoint that will be be queried by Safaricom's
    | API on completion or failure of the transaction.
    |
    */

    'callback_url' => "http://payments.smodavproductions.com/checkout.php",

    /*
    |--------------------------------------------------------------------------
    | Callback Method
    |--------------------------------------------------------------------------
    |
    | This is the request method to be used on the Callback URL on communication
    | with your server.
    |
    | e.g. GET | POST
    |
    */

    'callback_method' => "POST",

    /*
    |--------------------------------------------------------------------------
    | Paybill Number
    |--------------------------------------------------------------------------
    |
    | This is a registered Paybill Number that will be used as the Merchant ID
    | on every transaction. This is also the account to be debited.
    |
    | DEMO PAYBILL NUMBER: 898998
    |
    */

    'paybill_number' => 898998,

    /*
    |--------------------------------------------------------------------------
    | SAG Passkey
    |--------------------------------------------------------------------------
    |
    | This is the secret SAG Passkey generated by Safaricom on registration
    | of the Merchant's Paybill Number.
    |
    */

    'passkey' => 'passkey',

    /*
    |--------------------------------------------------------------------------
    | Transaction ID Handler
    |--------------------------------------------------------------------------
    |
    | Provide a fully qualified class name of the Class that will be
    | used to generate the transaction number. This class must implement the
    | Transactable Interface.
    |
    | Default: '\SmoDav\Mpesa\Generator'
    |
    */

    'transaction_id_handler' => '\SmoDav\Mpesa\Generator',
];
