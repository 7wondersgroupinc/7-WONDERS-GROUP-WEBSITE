<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "Kadeem.Bell@7wondersgroupinc.com";
    $subject = "New Resume Submission";
    $body = "Name: " . $_POST["name"] . "\nEmail: " . $_POST["email"] . "\nMessage: " . $_POST["message"];
    $headers = "From: no-reply@7wondersgroupinc.com";

    mail($to, $subject, $body, $headers);
    echo "Resume submitted successfully.";
} else {
    echo "Invalid request.";
}
?>