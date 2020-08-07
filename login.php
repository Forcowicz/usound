<?php
ob_start();
include("includes/config.php");
include("includes/functions.php");
include_once("includes/classes/Account.php");
include_once("includes/classes/Constants.php");

$account = new Account($con);
include("includes/handlers/login-handler.php");

    if(isset($_SESSION['userLoggedIn'])) {
        header("Location: index.html");
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | uSound</title>

    <link rel="icon" href="images/icons/logo-black.png">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Varta:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main>
    <section class="section-login">
       <div class="row row--background row--padding">
           <form action="login.php" class="form" method="POST">
               <div class="u-center-text u-margin-bottom-sm">
                   <h2 class="heading-secondary">Logowanie</h2>
               </div>

               <?php echo $account->getError(Constants::$loginFail); ?>
               <div class="form__group">
                   <input type="text" name="loginUsername" id="username" required placeholder="Wpisz swoją nazwę użytkownika" class="form__input">
                   <label for="username" class="form__label">Wpisz swoją nazwę użytkownika</label>
               </div>
               <div class="form__group">
                   <input type="password" name="loginPassword" id="password" required placeholder="Wpisz swoje hasło" class="form__input">
                   <label for="password" class="form__label">Wpisz swoje hasło</label>
               </div>
               <button class="btn-square" name="loginSubmit">Zaloguj się &nbsp;<i class="fas fa-lg fa-long-arrow-alt-right"></i></button>
           </form>
       </div>
    </section>
</main>
</body>
</html>