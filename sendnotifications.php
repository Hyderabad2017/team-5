<html>
<body background="./assets/img/backgrounds/1.jpg">
<center>
<p> <h2>  <a href="index.html"><b><u>BACK TO HOME<u></b> </a></h2></p>
<center>
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
    '+919030541768',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+12679301379',
        // the body of the text message you'd like to send
        'body' => 'A scribe has accepted your notification go to your profile to check the details '
    )
);
