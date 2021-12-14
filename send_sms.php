<html>
 <head>
  <title>CURL Request</title>
</head>
<body>
<?php
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
// To set up environmental variables, see http://twil.io/secure
$account_sid = 'ACf69717f41ac42d3135f964745b736a82';
$auth_token = '674edc049e688b09587155933fb491ec';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+17163259804";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+15874322408',
    array(
        'from' => $twilio_number,
        'body' => 'Time to take your medication!'
    )
);

	?> 
 </body>
</html>