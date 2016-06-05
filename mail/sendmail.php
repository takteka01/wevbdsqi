<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$phone = $_POST["phone"]

$to      = 'avicennemedicaltun@gmail.com'; // Send email to our user
$subject = 'Contact'; // Give the email a subject                      
$headers = $email . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email
header("Location: ../contacts.html");
?>