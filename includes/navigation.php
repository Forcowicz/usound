<?php
if(!isset($_SESSION['userLoggedIn'])) {
    ?>
    <i class="fas fa-4x fa-user-circle popup-login__open-icon" id="popup-login__open"></i>

    <div class="popup-login__caption">Zaloguj się</div>
    <div class="blackout" id="modal">

        <div class="popup-login" id="popup-login">
            <i class="fas fa-2x fa-times-circle popup-login__close" id="popup-login__close"></i>

            <div class="popup-login__left">
                <h3 class="heading-tertiary heading-tertiary--gradient u-margin-bottom-xs">Zaloguj się</h3>
                <form method="POST" action="register.php" class="form">
                    <?php echo $account->getError(Constants::$loginFail); ?>
                    <div class="form__group">
                        <input type="text" id="loginUsername" name="loginUsername" minlength="3" maxlength="24" placeholder="Wpisz swoją nazwę użytkownika" value="<?php getInputValue('loginUsername'); ?>" class="form__input">
                        <label for="loginUsername" class="form__label">Wpisz swoją nazwę użytkownika</label>
                    </div>
                    <div class="form__group">
                        <input type="password" id="loginPassword" name="loginPassword" minlength="3" maxlength="32" value="<?php getInputValue('loginPassword'); ?>" placeholder="Wpisz swoje hasło" class="form__input">
                        <label for="loginPassword" class="form__label">Wpisz swoje hasło</label>
                        <button class="btn-text u-margin-top-xs" name="loginSubmit">Zaloguj się &nbsp;<i class="fas fa-lg fa-long-arrow-alt-right"></i></button>
                    </div>
                </form>
            </div>

            <div class="popup-login__right">
                <div class="pupup-login__logo-box">
                    <img src="images/icons/logo.png" class="popup-login__logo" alt="Logo">
                </div>
            </div>

        </div>
    </div>

    <script src="js/modal.js" type="text/javascript"></script>

<?php } else {
    echo "<a href='register.php?logout' class='popup-login__open-icon'><i class='fas fa-4x fa-times-circle'></i></a>";
} ?>