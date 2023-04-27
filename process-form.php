<?php
if(isset($_POST['submit'])) {
    $to = "giridharyadav20000104@gmail.com"; // replace with recipient email address
    $subject = "Test Email";
    $message = "This is a test email sent from PHP's built-in mail() function.";
    $headers = "From: ramkrishna336699@gmail.com"; // replace with sender email address

    if(mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Error: Message not sent.";
    }
} else {
    header("Location: index.html");
    exit();
}
?>
