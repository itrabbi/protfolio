<?php
if(isset($_POST['submit'])){
    //getting user data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Recipient email
    $mailTo = 'rhrabbbi@gmail.com'

    //email subject
    $subject = 'A New Message Recived From ' .$name;

    //email message body
    $htmlContent = '<h2> Email Requst Recived</h2>
    <p> <b> Client Name: </b>'.$name. '</p>
    <p> <b> Email: </b>'.$email.'</p>
    <p> <b> Message: </b>'.$message.'</p>';

    //headers for sender info
    $headers = "From: ".$name . "<".  $email ">";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
 
    //PHP mailer function
    $result = mail($mailTo, $subject, $htmlContent, $headers)

    //error cheacking
    if($result){
        $success = "The meassege was sent successfuly!";
    } else{
        $failed = "Error: Massege was not sent, Try again Later";
    }

}
?>