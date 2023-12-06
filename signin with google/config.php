<?php 

require_once("../vendor/autoload.php");
$google_client= new Google_Client();
$google_client->setClientId("283257671419-ll4bvlenh1chh2e8rlrqqcuu85413os7.apps.googleusercontent.com");
$google_client->setClientSecret("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");
$google_client->setRedirectUri("http://localhost:82/2301b2%20php/signin%20with%20google/index.php");

$google_client->addScope('email');
$google_client->addScope('profile');

session_start();

?>