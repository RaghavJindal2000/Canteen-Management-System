<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once './vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$sid    = "ACb8d591fc5d518ecfe417cf2365659a69";
$token  = "058bc35e40032b1c1e689e748f4a3134";
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("+917247443525", // to
                           [
                               "body" => "This is the ship that made the Kessel Run in fourteen parsecs?",
                               "from" => "+12693593377"
                           ]
                  );

print($message->sid);
?>