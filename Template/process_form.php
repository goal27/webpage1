<?php
error_log("Form submitted");  // Add this line at the beginning of your script
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['your-name'];
    $email = $_POST['your-email'];
    $subject = $_POST['your-subject'];
    $message = $_POST['your-message'];

    // Set the recipient email address
    $to = "vtudeep@gmail.com"; // Replace with your email

    // Set the email subject
    $email_subject = "New Contact Form Submission: $subject";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n\n";
    $email_message .= "Message:\n$message";

    // Send the email
    mail($to, $email_subject, $email_message);

    // Redirect to a thank you page or display a success message
    header("Location: thank-you.html"); // Create a thank-you page
    exit();
}
?>
