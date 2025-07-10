<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "Richard@7wondersgroupinc.com";
    $subject = "New NDA Submission";
    $body = "Name: " . $_POST["name"] . "\nEmail: " . $_POST["email"] . "\nNDA Content: " . $_POST["nda"];
    $headers = "From: no-reply@7wondersgroupinc.com";

    mail($to, $subject, $body, $headers);
    echo "NDA submitted successfully.";
} else {
    echo "Invalid request.";
}
?>