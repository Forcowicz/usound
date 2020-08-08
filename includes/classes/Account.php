<?php
	class Account {

		private $con;
		private $errorArray;

		public function __construct($con) {
			$this->con = $con;
			$this->errorArray = array();
		}

		public function register($un, $fn, $ln, $gd, $bd, $em, $pw, $pwv) {
			$this->validateUsername($un);
			$this->validateFirstName($fn);
			$this->validateLastName($ln);
			$this->validateEmails($em);
			$this->validatePasswords($pw, $pwv);

			if(empty($this->errorArray)) {
			    return $this->inserUser($un, $fn, $ln, $gd, $bd, $em, $pw);
            } else {
			    return mysqli_error($this->con);
            }
		}

		public function login($un, $pw) {
		    $pw = md5($pw);
		    $query = mysqli_query($this->con, "SELECT * FROM users WHERE username = '$un' AND password = '$pw'");
		    if(mysqli_num_rows($query) === 1) {
		        return true;
            } else {
		        array_push($this->errorArray, Constants::$loginFail);
		        return false;
            }
        }

        public function logout() {
		    session_destroy();
        }

		public function getError($error) {
			if(!in_array($error, $this->errorArray)) {
				$error = "";
			}
			return "<span class='form__error'>$error</span>";
		}

        private function inserUser($un, $fn, $ln, $gd, $bd, $em, $pw) {
		    $encryptedPw = md5($pw);
		    $profilePic = "images/placeholder.png";
		    $date = date("Y-m-d H:m:s");

		    $query = "INSERT INTO users (username, firstName, lastName, password, email, date, profilePic, gender, birthDate) VALUES ('$un', '$fn', '$ln', '$encryptedPw', '$em', '$date', '$profilePic', '$gd', '$bd')";
		    return $result = mysqli_query($this->con, $query);
        }

		private function validateUsername($un) {

			if(strlen($un) >= 32 || strlen($un) <= 3) {
				array_push($this->errorArray, Constants::$usernameLength);
				return;
			}
			$checkUsername = mysqli_query($this->con, "SELECT username FROM users WHERE username = '$un'");
			    if(mysqli_num_rows($checkUsername) > 0) {
			        array_push($this->errorArray, Constants::$usernameTaken);
			        return;
                }
		}

		private function validateFirstName($fn) {
			if(strlen($fn) >= 40 || strlen($fn) <= 2) {
				array_push($this->errorArray, Constants::$firstNameLength);
				return;
			}
		}

		private function validateLastName($ln) {
			if(strlen($ln) >= 40 || strlen($ln) <= 2) {
				array_push($this->errorArray, Constants::$lastNameLength);
				return;
			}
		}

		private function validateEmails($em) {
			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, Constants::$emailInvalid);
				return;
			}
			$checkEmail = mysqli_query($this->con, "SELECT email FROM users WHERE email = '$em'");
			if(mysqli_num_rows($checkEmail) > 0) {
			    array_push($this->errorArray, Constants::$emailTaken);
            }
		}

		private function validatePasswords($pw, $pwv) {
			
			if($pw != $pwv) {
				array_push($this->errorArray, Constants::$passwordsNotMatch);
				return;
			}

			if(preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, Constants::$passwordInvalid);
				return;
			}

			if(strlen($pw) >= 32 || strlen($pw) <= 8) {
				array_push($this->errorArray, Constants::$passwordLength);
				return;
			}

		}


	}