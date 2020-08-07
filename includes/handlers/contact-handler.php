<?php
include("includes/functions.php");

    if(isset($_POST['contactSubmit'])) {
        $names = sanitizeInputNames($_POST['contactNames']);
        $email = sanitizeFormEmail($_POST['contactEmail']);
        $subject = sanitizeInputMessage($_POST['contactSubject']);
        $message = sanitizeInputMessage($_POST['contactMessage']);
    }


?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Handler</title>
</head>
<body>

</body>
</html>