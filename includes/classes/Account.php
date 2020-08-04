<?php
    class Account {

        private $con;
        private $errorArray;

        public function __construct($con) { // Wywołana kiedy tylko zostanie utworzona instacja
            $this->con = $con;
            $this->errorArray = [];
        }

        public function register($un, $fn, $ln, $em, $emv, $pw, $pwv) {
            $this->validateUsername($un);
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em, $emv);
            $this->validatePassword($pw, $pwv);

            if(empty($this->errorArray)) {
                return $this->insertUser($un, $fn, $ln, $em, $pw);
            } else {
                return false;
            }
        }

        public function getError($error) {
            if(!in_array($error, $this->errorArray)) {
                $error = "";
            }
            return "<span class='errorMessage'>$error</span>";
        }

        private function insertUser($un, $fn, $ln, $em, $pw) {
            $encryptedPw = md5($pw);
            $profilePic = "/images/profile-pics/placeholder.png";
            $dateNow = date("Y-m-d");

            $query = "INSERT INTO users (username, firstName, lastName, email, date, profilePic, password) VALUES ('$un', '$fn', '$ln', '$em', '$dateNow', '$profilePic', '$encryptedPw')";
            $result = mysqli_query($this->con, $query);
            return $result;
        }

        private function validateUsername($un) {
            if(strlen($un  >= 25 || strlen($un) <= 3)) {
                array_push($this->errorArray, "Nazwa użytkownika musi być pomiędzy 3 a 25 znakami!");
                return;
            }

            // Check if is in the database
        }

        private function validateFirstName($fn) {
            if(strlen($fn) >= 40 || strlen($fn) <= 3) {
                array_push($this->errorArray, "Twoje imię musi mieć od 3 do 40 znaków!");
                return;
            }
        }

        private function validateLastName($ln) {
            if(strlen($ln) >= 40 || strlen($ln) <= 3) {
                array_push($this->errorArray, "Twoje nazwisko musi mieć od 3 do 40 znaków!");
                return;
            }
        }

        private function validateEmails($em, $emv) {
            if($em !== $emv) {
                array_push($this->errorArray, "Wpisane adresy e-mail nie są jednakowe!");
                return;
            }

            if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorArray, "Wpisany adres e-mail nie jest prawidłowy!");
                return;
            }

            // Check if email hasn't arleady been used
        }

        private function validatePassword($pw, $pwv) {
            if($pw !== $pwv) {
                array_push($this->errorArray, "Wpisane hasła nie są jednakowe!");
                return;
            }

            if(preg_match("/[^A-Za-z0-9]/", $pw)) {
                array_push($this->errorArray, "Twoje hasło zawiera niedozwolone znaki!");
                return;
            }

            if(strlen($pw) >= 32 || strlen($pw) <= 8) {
                array_push($this->errorArray, "Twoje hasło musi mieć od 8 do 32 znaków!");
                return;
            }
        }
    }