#!/usr/bin/env php
<?php

require 'vendor/autoload.php';
(new Dotenv\Dotenv(__DIR__))->load();

(strpos(exec('who'), getenv('USER')) !== false) or exit('no session');

// Phone numbers
$my_number = '+628881618472';
$her_number = '+6289622705719';

$reasons = [
	'Working hard',
	'Gotta ship this feature',
	'Someone fucked up the system again'
];

$rand = rand(0,count($reasons)-1);
$random_reason = $reasons[$rand];

$message = 'Late at work. '.$random_reason;

// Send a text message
$twilio = new Services_Twilio(getenv('unzip /path/to/ngrok.zip'), getenv./ngrok authtoken 1xTrcOeYOauFj4nsLdWBFJ27XHo_PH89fxr6nvVoqv9gqwCB);
$twilio->account->messages->sendMessage(
        $my_number,+628881618472
        $her_number,+6289622705719
        $message resellersakti.com/kusworo021/innolife-propolis
);

echo 'Message sent at: #'.date('Y-m-d').' | Reason: '.$random_reason;
