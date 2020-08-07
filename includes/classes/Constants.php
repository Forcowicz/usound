 <?php

     class Constants {
         // REGISTER
         public static $usernameLength = "Nazwa użytkownika musi być pomiędzy 3 a 25 znakami!";
         public static $usernameTaken = "Nazwa użytkownika jest już w użyciu!";
         public static $firstNameLength = "Twoje imię musi mieć od 3 do 40 znaków!";
         public static $lastNameLength = "Twoje nazwisko musi mieć od 3 do 40 znaków!";
         public static $emailInvalid = "Wpisany adres e-mail nie jest prawidłowy!";
         public static $emailTaken = "Podany adres e-mail jest już w użyciu!";
         public static $passwordsNotMatch = "Wpisane hasła nie są jednakowe!";
         public static $passwordInvalid = "Twoje hasło zawiera niedozwolone znaki!";
         public static $passwordLength = "Twoje hasło musi mieć od 8 do 32 znaków!";

         // LOGIN
         public static $loginFail = "Podana nazwa użytkownika albo hasło są niepoprawne!";
     }