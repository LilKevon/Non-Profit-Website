<?php

$visitor_email = $_POST['email'];


$email_from = 'contactinfo@outputsuccesseducation.org';
$email_subject = 'This Email wants to be part of NewsLetter!';
$email_body = "User Email: $visitor_email.\n".
            


$to = 'contactinfo@outputsuccesseducation.org';
 
// $headers = "From: $email_form \r\n";

//$headers .= "Replay-To: $visitor_email \r\n";

mail($to,$email_subject);

header("Location: contact.html");
?>