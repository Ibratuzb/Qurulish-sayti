<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "ibratjon.jurayev@gmail.com";
    $subject = "Contact Form Submission - " . $subject;
    $body = "Name: " . $name . "\n\nEmail: " . $email . "\n\nMessage: " . $message;

    // Email göndərmək üçün PHP mail() funksiyasını istifadə edirik
    if (mail($to, $subject, $body)) {
        echo "Xabaringiz yuborildi.Tashakkur!";
    } else {
        echo "Xato yuz berdi.qaytadan yuborib koring";
    }
}
?>