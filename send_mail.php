<?php

$webmaster_email = "noli.zulu@zakhanya.co.za";


$email_address = $_REQUEST['email'] ;
$comments = $_REQUEST['message'] ;
$first_name = $_REQUEST['name'] ;
$msg = 
"First Name: " . $first_name . "\r\n" . 
"Email: " . $email_address . "\r\n" . 
"Message: " . $comments ;
mail( "$webmaster_email", "Feedback Form Results", $msg );
header( "Location: index.html" );