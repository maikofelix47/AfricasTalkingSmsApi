<?php
require_once('SendSms.php');

$sendSms = new SendSms();

$recipients = '0700123456';
$message = 'This is a test message';

$sendSms->sendSms($recipients , $message);


?>