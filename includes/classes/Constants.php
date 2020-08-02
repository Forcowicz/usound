<?php
class Constants {
    public static $usernameBadLength = "Your username must be between 3 and 16 characters!";
    public static $passwordsDoNotMatch = "Entered passwords do not match!"; // Static oznacza, że nie trzeba tworzyć instancji klasy przed powołaniem funkcji
    public static $passwordInvalidChars = "You can't use special symbols in your password!";
    public static $passwordBadLenght = "Your password must be between 3 and 32 characters!";
    public static $firstNameBadLength = "Your first name has to be between 2 and 32 characters!";
    public static $lastNameBadLength = "Your last name has to be between 2 and 32 characters!";
    public static $emailsDoNotMatch = "Entered e-mails do not match!";
    public static $emailInvalidChars = "Entered e-mail contain illegal characters or is invalid!";
}