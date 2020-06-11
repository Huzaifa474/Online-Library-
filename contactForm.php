<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'sohailhassaan@yahoo.com';
  $email_subject = 'New Form Submission';
  $email_body = "Username = $name.\n".
                  "User Email = $visitor_email.\n".
                  "User Message = $message";
  $to = "bookparadise786@gmail.com";
  $headers = "From: $email_from\r\n";
  $headers = "Reply-To: $visitor_email\r\n";
  mail($to,$email_subject,$email_bodu=y,$headers);
  header("location: contact.php");
 ?>
