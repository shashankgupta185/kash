<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Write to us</title>
</head>

<body>
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    $body_message =
        "From : {$name}" .
        "\n" .
        "Email : {$email}" .
        "\n" .
        "Contact number : {$contact}" .
        "\n" .
        "Message : {$message}";

    $retour = mail('moien@kaash.eu',
        'You have receieved a message',
        $body_message,
        'From: moien@kaash.eu'
    );
    if ($retour) {
        echo '<p>Your message has been sent.</p>';
    }
    ?>
</body>
</html>