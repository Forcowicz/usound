<?php
if(isset($_POST['loginSubmit'])) {
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    $result = $account->login($username, $password);

    if($result === true) {
        $_SESSION['userLoggedIn'] = true;
        $_SESSION['username'] = $username;
        header("Location: index.html");
    }
}