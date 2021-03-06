<?php
ob_start();
error_reporting(E_ALL);

include("includes/config.php");
include("includes/classes/Constants.php");
include("includes/classes/Account.php");


$account = new Account($con);

include_once("includes/functions.php");
include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");
include("includes/handlers/logout-handler.php");
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja | uSound</title>

    <link rel="icon" href="images/icons/logo-black.png">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Varta:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<!--    <nav class="nav-short">-->
<!--        <div class="nav-short__opener" id="nav-short-opener">-->
<!--            <i class="fas fa-2x fa-chevron-right nav-short__icon" id="nav-short-icon"></i>-->
<!--        </div>-->
<!--        <div class="nav-short__container">-->
<!---->
<!--        </div>-->
<!--    </nav>-->
<!---->
<!--    <script>-->
<!--        var transformValue = "0rem";-->
<!--        var transformSecondValue = "25%";-->
<!--        var transformSecondValueBack = "-5.5rem";-->
<!--        var rotateValue = "180deg"-->
<!--        $("#nav-short-opener").click(function() {-->
<!--           $("#nav-short-icon").removeClass("fa-chevron-right");-->
<!--           $("#nav-short-icon").addClass("fa-chevron-left");-->
<!--           $(this).attr("id", "nav-short-closer");-->
<!--           $(".nav-short").css("transform", `translateX(${transformValue})`);-->
<!---->
<!--           // Close-->
<!--            $("#nav-short-closer").click(function() {-->
<!--                $("#nav-short-icon").removeClass("fa-chevron-left");-->
<!--                $("#nav-short-icon").addClass("fa-chevron-right");-->
<!--                $(this).attr("id", "nav-short-opener");-->
<!--                $(".nav-short").css("transform", `translateX(${transformSecondValueBack})`);-->
<!--            });-->
<!--        });-->
<!--    </script>-->

    <main>
        <?php include("includes/navigation.php"); ?>

        <section class="section-register">
            <div class="row">
                <div class="col-1-of-3 u-center-text container" id="infoBox">
                    <h2 class="heading-secondary">Rejestracja</h2>
                    <h3 class="heading-tertiary">Jak to zrobić?</h3>
                    <p class="form__text">Ze względów bezpieczeństwa oraz wczesnego dostępu, procedura rejestacji odbywa się ręcznie, oto kroki, jakie musisz podjąć:</p>
                    <ol class="ordered-list">
                        <li>Podaj swoje dane w formularzu obok</li>
                        <li>Wyślij formularz</li>
                        <li>Poczekaj na wiadomość od administratora</li>
                        <li>Postępuj zgodnie z instrukcją</li>
                    </ol>
                    <p class="form__text">Administrator wyśle do Ciebie wiadomość e-mail z instrukcją w ciągu 24 godzin od wysłania formularza. Po pomyślnym przejściu weryfikacji, twoje konto zostanie utworzone. Nie będzie wymagana weryfikacja dokumentów. W razie problemów, skontaktuj się z nami poprzez formularz kontaktowy.</p>
                    <button class="btn-text u-margin-top-xs" id="hideInfoBox">Kontakt</button>
				</div>

                <div class="col-1-of-3 u-center-text container" id="contactBox">
                    <div class="u-center-text u-margin-bottom-sm">
                        <h2 class="heading-secondary heading-secondary--alternative">Kontakt</h2>
                    </div>
                    <p class="form__text">Aby skontakować się z nami, wyślij wiadomość na podany adres e-mail:</p>
                    <div class="u-center-text u-margin-top-sm u-margin-bottom-sm">
                        <p class="form__text"><b>forcowicz@gmail.com</b></p>
                    </div>
                    <p class="form__text">Pamiętaj, aby zamieścić poprawny temat wiadomości. Administrator skontaktuje się z Tobą w ciągu 48 godzin.</p>
                    <button class="btn-text u-margin-top-xs" id="hideContactBox">Informacje</button>
                </div>

                <script src="js/register.js" type="text/javascript"></script>
                <script>
                    $(document).ready(function() {
                        $("#infoBox").show();
                        $("#contactBox").hide();
                    });
                </script>

                <div class="col-2-of-3 container">
                    <div class="u-center-text">
                        <h2 class="heading-secondary heading-secondary-alternative u-margin-bottom-xs">Formularz</h2>
                    </div>
                    <form action="register.php" class="form" method="POST">
                        <div class="form__group">
                            <?php echo $account->getError(Constants::$usernameLength); ?>
                            <?php echo $account->getError(Constants::$usernameTaken); ?>
                            <input type="text" id="username" name="registerUsername" class="form__input" minlength="3" value="<?php getInputValue('registerUsername'); ?>" maxlength="24" placeholder="Podaj wymarzoną nazwę użytkownika" required>
                            <label for="username" class="form__label">Podaj wymarzoną nazwę użytkownika</label>
                        </div>
                        <div class="form__group">
                            <?php echo $account->getError(Constants::$emailInvalid); ?>
                            <?php echo $account->getError(Constants::$emailTaken); ?>
                            <input type="email" class="form__input" name="registerEmail" value="<?php getInputValue('registerEmail'); ?>" placeholder="Podaj swój adres e-mail" id="email" required>
                            <label for="email" class="form__label">Podaj swój adres e-mail</label>
                        </div>
                        <div class="row row--small-margin">
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <?php echo $account->getError(Constants::$firstNameLength); ?>
                                    <input type="text" class="form__input" name="registerFirstName" minlength="3" value="<?php getInputValue('registerFirstName'); ?>" placeholder="Podaj swoje imię" id="firstName" required>
                                    <label for="firstName" class="form__label">Podaj swoje imię</label>
                                </div>
                            </div>
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <?php echo $account->getError(Constants::$lastNameLength); ?>
                                    <input type="text" class="form__input" name="registerLastName" value="<?php getInputValue('registerLastName'); ?>" placeholder="Podaj swoje nazwisko" id="lastName" required>
                                    <label for="lastName" class="form__label">Podaj swoje nazwisko</label>
                                </div>
                            </div>
                        </div>
                        <h3 class="heading-tertiary u-margin-bottom-xs">Podaj swoją płeć</h3>
                        <div class="form__radio-group u-margin-bottom-xs">
                            <input type="radio" value="male" name="registerGender" id="male" class="form__radio-input">
                            <label for="male" class="form__radio-label">
                                <span class="form__radio-button"></span>
                                Mężczyzna
                            </label>
                        </div>
                            <br>
                        <div class="form__radio-group u-margin-bottom-xs">
                            <input type="radio" value="female" name="registerGender" id="female" class="form__radio-input">
                            <label for="female" class="form__radio-label">
                                <span class="form__radio-button"></span>
                                Kobieta
                            </label>
                        </div>
                            <br>
                        <div class="form__radio-group u-margin-bottom-sm">
                            <input type="radio" value="unknown" name="registerGender" id="unknown" class="form__radio-input">
                            <label for="unknown" class="form__radio-label">
                                <span class="form__radio-button"></span>
                                Wolę nie podawać
                            </label>
                        </div>
                        <div class="row row--small-margin">
                            <div class="col-1-of-2">
                                    <div class="form__group">
                                        <?php echo $account->getError(Constants::$passwordLength); ?>
                                        <?php echo $account->getError(Constants::$passwordInvalid); ?>
                                        <i class="fas fa-2x fa-eye form__icon" id="showPassword1"></i>
                                        <input type="password" minlength="8" maxlength="32" placeholder="Utwórz swoje hasło" name="registerPassword" id="password1" class="form__input">
                                        <label for="password1" class="form__label">Utwórz swoje hasło</label>
                                    </div>
                            </div>
                                <div class="col-1-of-2">
                                    <div class="form__group">
                                        <?php echo $account->getError(Constants::$passwordsNotMatch); ?>
                                        <i class="fas fa-2x fa-eye form__icon" id="showPassword2"></i>
                                        <input type="password" minlength="8" maxlength="32" placeholder="Powtórz swoje hasło" name="registerPasswordValidate" id="password2"  class="form__input">
                                        <label for="password2" class="form__label">Powtórz swoje hasło</label>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <label for="birthDate" class="form__label form__label--date">Wprowadź swoją datę urodzenia</label>
                                    <input type="date" name="registerBirthDate" value="<?php echo date('Y-m-d'); ?>" min="1900-01-01" max="<?php echo date('Y-m-d'); ?>" id="birthDate" class="form__date u-margin-top-xs">
                                </div>
                            </div>
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <label for="registerCode" class="form__label form__label--date">Jeżeli posiadasz kod specjalny, wpisz go tutaj</label>
                                    <input type="text" name="registerCode" id="registerCode" placeholder="Wpisz kod specjalny" class="form__input u-margin-top-xs">
                                    <label for="registerCode" class="form__label">Wpisz kod specjalny</label>
                                </div>
                            </div>
                        </div>
                        <div class="u-center-text u-margin-top-sm">
                            <button class="btn btn--green u-margin-bottom-sm" name="registerSubmit">Wyślij formularz &nbsp; <i class="fas fa-lg fa-long-arrow-alt-right"></i></button><br>
                            <small class="caption u-margin-top-xs">Wysyłająć formularz, zgadzasz się na nasz regulamin oraz zobowiązujesz do jego przestrzegania.</small><br>
                            <small class="caption u-margin-top-xs">Twoje dane są raczej bezpieczne.</small>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    <script>
        var icon1 = document.getElementById('showPassword1');
        var icon2 = document.getElementById('showPassword2');
        var password1 = document.getElementById('password1');
        var password2 = document.getElementById('password2');

        icon1.addEventListener('click', function () {
            if(password1.type === 'password' && password1.value.length > 0) {
                password1.type = 'text';
            } else if (password1.type === 'text' && password1.value.length > 0) {
                password1.type = 'password';
            }
        })
        icon2.addEventListener('click', function () {
            if(password2.type === 'password' && password2.value.length > 0) {
                password2.type = 'text';
            } else if (password2.type === 'text' && password2.value.length > 0) {
                password2.type = 'password';
            }
        })
    </script>
    </main>
</body>
</html>