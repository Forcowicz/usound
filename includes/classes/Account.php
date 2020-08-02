<?php
include("Constants.php");

  class Account {

    private $conn;
    private $errorArray;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->errorArray = [];
    }

    public function register($un, $pw, $pwv, $em, $emv, $fn, $ln) {
      $this->validateUsername($un);
      $this->validatePassword($pw, $pwv);
      $this->validateEmails($em, $emv);
      $this->validateFirstName($fn);
      $this->validateLastName($ln);

      if(empty($this->errorArray)) {
          return $this->insertUser($un, $pw, $fn, $ln, $em);
      } else {
        return false;
      }
    }

    public function getError($err) {
      if(!in_array($err, $this->errorArray)) {
        $err = "";
      }
      return "<span class='error_message'>$err</span>";    
    }

    private function insertUser($un, $pw, $fn, $ln, $em) {
        $encryptedPw = md5($pw);
        $profilePic = "images/profile-pics/placeholder.png";
        $date = date("Y-m-d");
        $query = "INSERT INTO users(username, firstName, lastName, email, password, date, profilePic) VALUES ('$un', '$fn', '$ln', '$em', '$encryptedPw', '$date', '$profilePic')";

        $result = mysqli_query($this->conn, $query);
        if(!$result) exit("Error: " . mysqli_error($this->conn));
        return $result;
    }

    private function validateUsername($un) {
      if(strlen($un) > 16 || strlen($un) < 3) {
        array_push($this->errorArray, Constants::$usernameBadLength); // :: oznacza, że powoływana jest zmienna static, a nie instancja
        return;
      }
    }

    private function validatePassword($pw, $pwv) {
      if($pw !== $pwv) {
        array_push($this->errorArray, Constants::$passwordsDoNotMatch);
        return;
      } else if(preg_match('/[^]A-Za-z0-9]/', $pw)) {
        array_push($this->errorArray, Constants::$passwordInvalidChars);
        return;
      } else if(strlen($pw) < 8 || strlen($pw) > 32) {
        array_push($this->errorArray, Constants::$passwordsDoNotMatch);
        return;
      }
    }

    private function validateFirstName($fn) {
      if(strlen($fn) < 2 || strlen($fn) > 32) {
        array_push($this->errorArray, Constants::$firstNameBadLength);
        return;
      }
    }

    private function validateLastName($ln) {
      if (strlen($ln) < 2 || strlen($ln) > 32) {
        array_push($this->errorArray, Constants::$lastNameBadLength);
        return;
      }
    }

    private function validateEmails($em, $emv) {
      if($em !== $emv) {
        array_push($this->errorArray, Constants::$emailsDoNotMatch);
        return;
      } else if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
        array_push($this->errorArray, Constants::$emailInvalidChars);
        return;
      }
    }
  }