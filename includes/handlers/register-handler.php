<?php 

function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}

function sanitizeFormUsername($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}

function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}

function sanitizeFormEmail($input) {
    $input = strip_tags($input);
    $input = str_replace(" ", "", $input);
    $input = strtolower($input);
    return $input;
}


if(isset($_POST['registerSubmit'])) {
	//Register button was pressed
	$username = sanitizeFormUsername($_POST['registerUsername']);
	$firstName = sanitizeFormString($_POST['registerFirstName']);
	$lastName = sanitizeFormString($_POST['registerLastName']);
	$gender = $_POST['registerGender'];
	$birthDate = $_POST['registerBirthDate'];
	$email = sanitizeFormEmail($_POST['registerEmail']);
	$password = sanitizeFormPassword($_POST['registerPassword']);
	$passwordValidate = sanitizeFormPassword($_POST['registerPasswordValidate']);

	$status = $account->register($username, $firstName, $lastName, $gender, $birthDate, $email, $password, $passwordValidate);

    if ($status === true) {
        header("Location: index.html");

    } else {
        echo $status;
    }


}