<?php
$date   = $_POST["date"];
$sender = $_POST["from"];
$id = $_POST["id"];
$text = $_POST["text"];
$to   = $_POST["to"];
$networkCode = $_POST["from"];
$linkId = $_POST["linkId"];

require 'vendor/autoload.php';

use AfricasTalking\SDK\AfricasTalking;

// Set your app credentials
$username   = "sandbox";
$apiKey     = "120b391c28b4826e222b8d5c57fb6b9c52025fea0594cb7b316c3f6e3e80ad39";
$shortCode  = "13324";
// Initialize the SDK
$AT         = new AfricasTalking($username, $apiKey);

// Get the SMS service
$sms        = $AT->sms();

// Set the numbers you want to send to in international format
$recipients = $sender;

// Set your message
$message    = "Coronavirus disease (COVID-19) is an infectious disease caused by a new virus that had not been previously identified in humans.";
$message1   = "The new coronavirus spreads primarily through contact with an infected person when they cough or sneeze, or through droplets of saliva or discharge from the nose.";
$message2   = "The virus causes respiratory illness (like the flu) with symptoms such as a cough, fever and in more severe cases, pneumonia.";
$message3   = "At this time, there is no vaccine to protect against COVID-19 and no medications approved to treat it.";
$message4   = "As of March 2012, we had 4968 cases of COVID";
$message5   = "Coronaviruses were identified in the mid-1960s and are known to infect humans and a variety of birds and animals. Its origins are speculated to be from bats";
$message6    = "Clean your hands often \n
Avoid close contact \n
Stay home if you’re sick \n
Cover coughs and sneezes \n
Wear a facemask if you are sick \n
Clean and disinfect
";
$message7   = "Hot baths prevent corona \n
Mosquito bites cannot transmit the virus \n
UV disinfection can kill the virus
";
$default    = "Corona is deadly. What would you like to know about it?";

$fp = file_put_contents( 'request.log', $_POST );
$fp2 = file_put_contents('incomingmessage.txt', $_POST);

try {
    // Thats it, hit send and we'll take care of the rest
    
    if ($text == "Corona") {
        $result = $sms -> send([
        'to'      => $recipients,
        'message' => $message,
        'from'    => $from
        ]);
        print_r($result);
        
    } else if ($text == "Transmission") {
        $result = $sms -> send([
        'to'      => $recipients,
        'message' => $message1,
        'from'    => $from
        ]);
        print_r($result);
        
    } else if ($text == "Symptoms") {
        $result = $sms -> send([
        'to'      => $recipients,
        'message' => $message2,
        'from'    => $from
        ]);
        print_r($result);
        
    } else if ($text == "Treatment") {
        $result = $sms -> send([
        'to'      => $recipients,
        'message' => $message3,
        'from'    => $from
        ]);
        print_r($result);
        
    } else if ($text == "Deaths") {
        $result = $sms -> send([
        'to'      => $recipients,
        'message' => $message4,
        'from'    => $from
        ]);
        print_r($result);
        
    } else if ($text == "History") {
        $result = $sms -> send([
        'to'      => $recipients,
        'message' => $message5,
        'from'    => $from
        ]);
        print_r($result);
        
    } else if ($text == "Prevention") {
        $result = $sms -> send([
        'to'      => $recipients,
        'message' => $message6,
        'from'    => $from
        ]);
        print_r($result);
        
    } else if ($text == "Myths") {
        $result = $sms -> send([
        'to'      => $recipients,
        'message' => $message7,
        'from'    => $from
        ]);
        print_r($result);
        
    } else {
        $result = $sms -> send([
        'to'      => $recipients,
        'message' => $default,
        'from'    => $from
        ]);
        print_r($result);
        
    }
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}
