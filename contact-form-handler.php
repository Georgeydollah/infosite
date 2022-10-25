<?php
  $name = $_Post['name'];
  $visitor_email = $_Post['email'];
  $message = $_POST['message'];

  $email_from = 'george@busby.info';
  
  $email_subject = "New Form Submission";
  
  $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                      "User Mesasge: $message.\n";
  
  $to = "busbybusbybusby@gmail.com"
    
    $headers = "From: $email_from \r\n";
      
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");

?>
