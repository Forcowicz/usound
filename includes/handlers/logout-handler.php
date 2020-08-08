<?php
if(isset($_GET['logout'])) {
    $account->logout();
    header("Location: register.php");
    exit();
}