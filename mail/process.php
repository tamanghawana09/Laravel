<?php
echo "This is process";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "hawanatamang@gmail.com"; 
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    header("Location: thank-you.html"); 
} else {
    header("Location: index.html");
}
?>
