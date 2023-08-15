<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Send an email to the site owner
    $to = "your@email.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    echo "Thank you for your message!";
} else {
    echo "Error: This page can only be accessed via form submission.";
}
?>
