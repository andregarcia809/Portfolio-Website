<?php

print_r($_POST);

// define variables and set to empty values
$name_error = $email_error = $subject_error = $tel_error = $message_error = "";

$name = $email = $subject = $tel = $message = "";

// Form is submitted with Post method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $subject = test_input($_POST["subject"]);
    $tel = test_input($_POST["tel"]);
    $message = test_input($_POST["message"]);

    // Checks for errors and sends mail
    if ($name_error == "" and $email_error == "" and $subject_error == "" and $message_error == "") {
        unset($_POST['submit']);
        foreach ($_POST as $key => $value) {
            $messageBody .= "$key: $value\n";
        }
    }

    $mailTo = "andre@andresgarcia809.com";
    $headers = "From: " . $email;
    $text = "You have received an e-mail form " . $name . ".\n\n" . $message;

    if (mail($mailTo, $subject, $text, $headers)) {
        $mailSent = "Your message has been sent, thank you.";
        $name = $email = $subject = $tel = $message = "";

    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
