<?php

//start session on web page

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google\Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('785736820201-uhkps69r7viujp78r9qfigfioprk06qr.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/MinilemonStore/home.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');
