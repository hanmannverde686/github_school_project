<?php
  // Get user input from form
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Validate input
  if(empty($name) || empty($email) || empty($message)) {
    header("Location: index.html?error=empty");
    exit();
  }

  // Set email headers
  $to = "your_email@example.com";
  $subject = "New message from $name";
  $message = "$name sent you a message: $message";
  $header = "From: $name <$email>\r\n";

  // Send email
  mail($to, $subject, $message, $header);

  // Redirect to index.html
  header("Location: index.html?success=true");
?>