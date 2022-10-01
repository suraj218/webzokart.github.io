<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$services = $_post['services'];
$Submit = $_post[''];

$email_from ='webzokart@gmail.com';
$email_subject = 'New Form Submission';
   

$email_body ="User Name:" $name.\n".
               "User email:" $visitor_email.\n".
               "User services:" $services.\n".
            
  $to ='webzokart@gmail.com';
  
  $headers ="Form: $email_from \r\n";

  $headers .="Reply-to: $visitor_email\r\n";

  mail($to,$email_subject,$email_body,$header);


  header("location: contact.html"); 


?>