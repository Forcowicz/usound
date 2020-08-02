<?php
ob_start();
include("includes/config.php");
include("includes/functions.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontakt | uSound</title>

    <link rel="icon" href="images/icons/logo-black.png">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Varta:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <section class="section-contact">
            <div class="row">
                <div class="col-1-of-3">
                    <div class="container">
                        <h2 class="heading-secondary">Kontakt</h2>
                    </div>
                </div>
                <div class="col-2-of-3">
                    <form action="contact.php" method="post" class="form">
                        <label for="contact-title">Tytuł wiadomości</label>
                        <input type="text" name="contact-title" class="form__input" placeholder="Your e-mail address">
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
