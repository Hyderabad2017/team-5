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
        "+919666865865" => "Srinivas",
        "+917093440261" => "Sai Namrmada"
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
                'body' => "Hey $name, Monkey Party at 6PM. Bring Bananas!",
                
                // Step 7: Add url(s) to the image media you want to send
                'mediaUrl' => array("https://demo.twilio.com/owl.png", 
                    "https://demo.twilio.com/logo.png")
            )
        );

        // Display a confirmation message on the screen
        echo "Sent message to $name";
    }
