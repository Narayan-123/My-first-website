<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['Details'];

$email_form = 'nraj7219@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name".
                "User Email: $visitor_email.\n".
                "User Message: $message";


  $to = "narayankumar4u1@gmail.com";

  $headers = "Form: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: service.html");

?>