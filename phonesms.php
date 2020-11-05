<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once './vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$sid    = "ACb8d591fc5d518ecfe417cf2365659a69";
$token  = "your_auth_token";
$twilio = new Client($sid, $token);

$validation_request = $twilio->validationRequests
                             ->create("+917984582161", // phoneNumber
                                      [
                                          "friendlyName" => "Third Party VOIP Number",
                                          "statusCallback" => "https://somefunction.twil.io/caller-id-validation-callback"
                                      ]
                             );

print($validation_request->friendlyName);
?>