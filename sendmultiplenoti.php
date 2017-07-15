<html>

    <head>
    <style>


h2 {
    text-align: left;
}
</style>
</head>
<body background="./assets/img/backgrounds/1.jpg">
					<div class="row">
                    <h2>  <a href="index.html"><b><u>BACK TO HOME<u></b> </a></h2>
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <br><br><h1><strong><center><font color="white"> The Scribes are notified.<br>You will be notified when a Scribe is found.<br>Thank you!!</font></center></strong></h1>
                            
                        </div>
                    </div>
<body>
</html>
<?php
    /* Send an SMS using Twilio. You can run this file 3 different ways:
     *
     * 1. Save it as sendnotifications.php and at the command line, run 
     *         php sendnotifications.php
     *
     * 2. Upload it to a web host and load mywebhost.com/sendnotifications.php 
     *    in a web browser.
     *
     * 3. Download a local server like WAMP, MAMP or XAMPP. Point the web root 
     *    directory to the folder containing this file, and load 
     *    localhost:8888/sendnotifications.php in a web browser.
     */

    // Step 1: Get the Twilio-PHP library from twilio.com/docs/libraries/php, 
    // following the instructions to install it with Composer.
    require_once "vendor/autoload.php";
    use Twilio\Rest\Client;
    
    // Step 2: set our AccountSid and AuthToken from https://twilio.com/console
    $AccountSid = "AC1bd9c3e05e0c85a69529296f36b4cfdc";
    $AuthToken = "2344a89b5a2a7a1d07611e1ef17c8a8b";

    // Step 3: instantiate a new Twilio Rest Client
    $client = new Client($AccountSid, $AuthToken);

    // Step 4: make an array of people we know, to send them a message. 
    // Feel free to change/add your own phone number and name here.
    $people = array(
        "+917680974517" => "Sai keerthana",
        "+919494947784" => "sowmya",
        "+15558675307" => "Virgil"
    );

    // Step 5: Loop over all our friends. $number is a phone number above, and 
    // $name is the name next to it
    foreach ($people as $number => $name) {

        $sms = $client->account->messages->create(

            // the number we are sending to - Any phone number
            $number,

            array(
                // Step 6: Change the 'From' number below to be a valid Twilio number 
                // that you've purchased
                'from' => "+12679301379", 
                
                // the sms body
                'body' => "Hey $name, Monkey Party at 6PM. Bring Bananas!"
            )
        );

        // Display a confirmation message on the screen
        //echo "Sent message to $name";
    }


