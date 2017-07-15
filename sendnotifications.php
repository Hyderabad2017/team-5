<html>
<body background="./assets/img/backgrounds/1.jpg">
<h1>Thankyou, for your response.That's a great contribution</h1>
</body>
</html>
<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC1bd9c3e05e0c85a69529296f36b4cfdc';
$token = '2344a89b5a2a7a1d07611e1ef17c8a8b';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+917680974517',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+12679301379',
        // the body of the text message you'd like to send
        'body' => 'Hey Keerthana welcome to twilio!!'
    )
);
