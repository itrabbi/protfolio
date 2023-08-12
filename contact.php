<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["ajax_name"];
    $email = $_POST["ajax_email"];
    $message = $_POST["ajax_message"];
    $subject = $_POST["ajax_subject"];
    
    Validate the data (you can implement more advanced validation)
    if (empty($name) || empty($email) || empty($message)) {
        echo "<span class='contact_error'>Please fill all required fields cfdsgsfdg.</span>";
    } 
    else {
        $to = "rhrabbbi@gmail.com"; // Replace with your email address
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $mail_subject = "New Contact Form Submission: $subject";
        $mail_message = "Name: $name\nEmail: $email\nMessage: $message";
        
        if (mail($to, $mail_subject, $mail_message, $headers)) {
            echo "<span class='contact_success'>Your message has been received. We will contact you soon.</span>";
        } else {
            echo "<span class='contact_error'>Oops! Something went wrong. Please try again later.</span>";
        }
    }
}
?>