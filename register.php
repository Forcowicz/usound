<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("includes/config.php");
include("includes/classes/Account.php");
  $account = new Account($conn);

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | uSound</title>

    <link rel="icon" href="images/icons/logo-black.png">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Varta:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<main>
    <section class="section-login">
        <div class="row">
            <div class="col-1-of-3">
                <form action="register.php" method="post" class="form">
                  <h2 class="heading-secondary heading-secondary--alternative">Zaloguj się</h2><br>
                  <label for="loginUsername" class="form__label">Nazwa użytkownika</label>
                  <input type="text" id="loginUsername" class="form__input" name="username" placeholder="Wpisz swoją nazwę użytkownika" required>

                  <label for="loginPassword" class="form__label">Hasło</label>
                  <input type="password" class="form__input" id="loginPassword" name="loginPassword" placeholder="Wpisz swoje hasło" required>

                  <input type="submit" name="login" value="Login" class="btn-form">
                </form>
                <div class="container-max">
                    <img src="images/ad-placeholder.jpg" alt="Ad Placeholder" class="container-max__img">
                </div>
            </div>


            <div class="col-2-of-3">
                <form action="register.php" method="post" class="form">
                    <div class="u-center-text">
                        <h2 class="heading-secondary heading-secondary--alternative">Zarejestruj się</h2><br>
                    </div>
                    <?php echo $account->getError(Constants::$usernameBadLength); ?>
                    <label for="registerUsername" class="form__label">Nazwa użytkownika</label>
                    <input type="text" id="registerUsername" class="form__input" name="registerUsername" placeholder="Wpisz wybraną nazwę użytkownika" value="<?php getInputValue('registerUsername'); ?>" required autocomplete="off">

                    <?php echo $account->getError(Constants::$passwordBadLenght); ?>
                    <?php echo $account->getError(Constants::$passwordInvalidChars); ?>
                    <label for="registerPassword" class="form__label">Hasło</label>
                    <input type="password" id="registerPassword" class="form__input" name="registerPassword" placeholder="Wpisz hasło" value="<?php getInputValue('registerPassword'); ?>" required autocomplete="off">

                    <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
                    <label for="registerPasswordValidate" class="form__label">Powtórz hasło</label>
                    <input type="password" id="registerPasswordValidate" class="form__input" name="registerPasswordValidate" placeholder="Powórz hasło" value="<?php getInputValue('registerPasswordValidate'); ?>" autocomplete="off" required>


                    <?php echo $account->getError(Constants::$emailInvalidChars); ?>
                    <label for="registerEmail" class="form__label">E-mail</label>
                    <input type="email" id="registerEmail" class="form__input" name="registerEmail" placeholder="Wpisz swój adres e-mail" value="<?php getInputValue('registerEmail'); ?>" required autocomplete="off">

                    <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                    <label for="registerEmailValidate" class="form__label">Powtórz e-mail</label>
                    <input type="email" id="registerEmailValidate" class="form__input" name="registerEmailValidate" placeholder="Powtórz e-mail" value="<?php getInputValue('registerEmailValidate'); ?>" required autocomplete="off">

                    <div class="row row--small-margin">
                        <div class="col-1-of-2">
                            <?php echo $account->getError(Constants::$firstNameBadLength); ?>
                            <label for="registerFirstName" class="form__label">Imię</label>
                            <input type="text" id="registerFirstName" class="form__input" name="registerFirstName" placeholder="Wpisz swoje imię" value="<?php getInputValue('registerFirstName'); ?>" required autocomplete="off">
                        </div>

                        <div class="col-1-of-2">
                            <?php echo $account->getError(Constants::$lastNameBadLength); ?>
                            <label for="registerLastName" class="form__label">Nazwisko</label>
                            <input type="text" name="registerLastName" class="form__input" id="registerLastName" placeholder="Wpisz swoje nazwisko" value="<?php getInputValue('registerLastName'); ?>" required autocomplete="off">
                        </div>
                    </div>

                    <div class="u-margin-bottom-xs">
                        <input type="checkbox" name="registerNewsletter" id="registerNewsletter">
                        <label for="registerNewsletter" class="form__label">&nbsp; Zapisz mnie do newslettera</label>
                    </div>

                    <input type="submit" name="register" value="Wyślij" class="btn-form u-margin-bottom-xs"><br>
                    <small class="caption">Rejestrując się, akceptujesz <span style="color: blue;">regulamin</span> i zobowiązujesz się do jego przestrzegania.</small>
                </form>
                <div class="container-max">
                    <div class="polygon">&nbsp;</div>
                        <h3 class="heading-tertiary">Terms of Use (TOS)</h3>
                        <p class="container-max__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aut consequuntur cumque quia saepe voluptatum?
                            Aliquid amet ea iusto, nostrum officia, perferendis perspiciatis quasi quidem quis quos ratione, voluptatum?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid deleniti deserunt enim et hic illum labore laboriosam natus qui quod quos sed suscipit tempora vel velit, vitae voluptate voluptates?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aut commodi et eum ex magni maiores modi nobis, omnis optio provident recusandae tempora ullam veritatis. Ducimus laboriosam odit sunt.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam animi autem beatae eos error explicabo, facilis, hic in maxime nemo nostrum possimus qui quisquam sequi suscipit tenetur, unde veritatis.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores corporis doloremque dolorum esse quis? Ab accusamus architecto consequatur, culpa, deleniti dignissimos eos, eum fugiat neque officia omnis placeat quidem ullam?</p>
                </div>
            </div>
        </div>
    </section>
</main>
</body>

</html>