<?php

include('google_config.php');

//Reset OAuth access token
unset($_SESSION['access_token']);
$google_client = new Google\Client();
$google_client->revokeToken();
session_destroy();


header('location: http://' . $_SERVER['HTTP_HOST'] . '/MinilemonStore/sign-in.php', true, 303);
