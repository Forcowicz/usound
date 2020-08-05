<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="pl">

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
        <section class="section-register">
            <div class="row">
                <div class="col-1-of-3 u-center-text container">
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
                    <a href="index.html#section-contact" class="btn-text u-margin-top-xs">Kontakt</a>
				</div>
                <div class="col-2-of-3 container">
                    <div class="u-center-text">
                        <h2 class="heading-secondary heading-secondary-alternative u-margin-bottom-xs">Formularz</h2>
                    </div>
                    <form action="register.php" class="form">
                        <div class="form__group">
                            <input type="text" id="username" class="form__input" minlength="3" maxlength="24" placeholder="Podaj wymarzoną nazwę użytkownika" required>
                            <label for="username" class="form__label">Podaj wymarzoną nazwę użytkownika</label>
                        </div>
                        <div class="form__group">
                            <input type="email" class="form__input" placeholder="Podaj swój adres e-mail" id="email" required>
                            <label for="email" class="form__label">Podaj swój adres e-mail</label>
                        </div>
                        <div class="row row--small-margin">
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <input type="text" class="form__input" minlength="3" placeholder="Podaj swoje imię" id="firstName" required>
                                    <label for="firstName" class="form__label">Podaj swoje imię</label>
                                </div>
                            </div>
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <input type="text" class="form__input" placeholder="Podaj swoje nazwisko" id="lastName" required>
                                    <label for="lastName" class="form__label">Podaj swoje nazwisko</label>
                                </div>
                            </div>
                        </div>
                        <h3 class="heading-tertiary u-margin-bottom-xs">Podaj swoją płeć</h3>
                        <div class="form__radio-group u-margin-bottom-xs">
                            <input type="radio" name="gender" id="male" class="form__radio-input">
                            <label for="male" class="form__radio-label">
                                <span class="form__radio-button"></span>
                                Mężczyzna
                            </label>
                        </div>
                            <br>
                        <div class="form__radio-group u-margin-bottom-xs">
                            <input type="radio" name="gender" id="female" class="form__radio-input">
                            <label for="female" class="form__radio-label">
                                <span class="form__radio-button"></span>
                                Kobieta
                            </label>
                        </div>
                            <br>
                        <div class="form__radio-group u-margin-bottom-sm">
                            <input type="radio" name="gender" id="unknown" class="form__radio-input">
                            <label for="unknown" class="form__radio-label">
                                <span class="form__radio-button"></span>
                                Wolę nie podawać
                            </label>
                        </div>
                        <div class="row row--small-margin">
                            <div class="col-1-of-2">
                                    <div class="form__group">
                                        <i class="fas fa-2x fa-eye form__icon" id="showPassword1"></i>
                                        <input type="password" minlength="8" maxlength="32" placeholder="Utwórz swoje hasło" id="password1" class="form__input">
                                        <label for="password" class="form__label">Utwórz swoje hasło</label>
                                    </div>
                            </div>
                                <div class="col-1-of-2">
                                    <div class="form__group">
                                        <i class="fas fa-2x fa-eye form__icon" id="showPassword2"></i>
                                        <input type="password" minlength="8" maxlength="32" placeholder="Powtórz swoje hasło" id="password2"  class="form__input">
                                        <label for="passwordValidate" class="form__label">Powtórz swoje hasło</label>
                                    </div>
                                </div>
                        </div>
                        <div class="form__group">
                            <div class="row">
                                <p class="form__text u-margin-bottom-xs">Podaj swoją datę urodzenia</p>
                                <div class="col-1-of-3">
                                    <select name="birthDay" id="birthDay" class="form__select form__select--max-width">
                                        <option disabled selected>Dzień</option>
                                        <?php
                                            for($i = 1; $i <= 31; $i++) {
                                                echo "<option value='$i'>$i</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-1-of-3">
                                    <select name="birthMonth" id="birthMonth" class="form__select form__select--max-width">
                                        <option disabled selected>Miesiąc</option>
                                        <option value="1">Stycznia</option>
                                        <option value="2">Lutego</option>
                                        <option value="3">Marca</option>
                                        <option value="4">Kwietnia</option>
                                        <option value="5">Maja</option>
                                        <option value="6">Czerwca</option>
                                        <option value="7">Lipca</option>
                                        <option value="8">Sierpnia</option>
                                        <option value="9">Września</option>
                                        <option value="10">Października</option>
                                        <option value="11">Listopada</option>
                                        <option value="12">Grudnia</option>
                                    </select>
                                </div>
                                <div class="col-1-of-3">
                                    <select name="birthYear" id="birthYear" class="form__select form__select--max-width">
                                        <option disabled selected>Podaj swój rok urodzenia</option>
                                        <?php
                                        for($i = 2020; $i >= 1900; $i--) {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="u-center-text u-margin-top-sm">
                            <a href="#" class="btn btn--green">Wyślij formularz &nbsp; <i class="fas fa-lg fa-long-arrow-alt-right"></i></a><br>
                            <small class="caption u-margin-top-xs">Wysyłająć formularz, zgadzasz się na nasz regulamin oraz zobowiązujesz do jego przestrzegania.</small>
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