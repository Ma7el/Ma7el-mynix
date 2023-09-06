<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $phone = $_POST['phone'];
  $location = $_POST['location'];
  $message = $_POST['message'];

  // Send email to the business's email address
  $to = 'your-business-email@example.com';
  $subject = 'New Jersey Order';
  $body = "Phone: $phone\nLocation: $location\nMessage: $message";
  $headers = "From: your-website@example.com";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Order submitted successfully. We will contact you shortly.';
  } else {
    echo 'Error submitting the order. Please try again.';
  }
}
?>