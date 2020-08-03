<?php
include_once("includes/functions.php");
include_once("includes/classes/Account.php");

  if (isset($_POST['register'])) {
    $un = $_POST['registerUsername'];
    $pw = $_POST['registerPassword'];
    $pwv = $_POST['registerPasswordValidate'];
    $em = $_POST['registerEmail'];
    $emv = $_POST['registerEmailValidate'];
    $fn = $_POST['registerFirstName'];
    $ln = $_POST['registerLastName'];

      $un = sanitizeInputBasic($un);
      $pw = sanitizeInputPassword($pw);
      $pwv = sanitizeInputPassword($pwv);
      $em = sanitizeInputBasic($em);
      $emv = sanitizeInputBasic($emv);
      $fn = sanitizeInputNames($fn);
      $ln = sanitizeInputNames($ln);

      $status = $account->register($un, $pw, $pwv, $em, $emv, $fn, $ln);

      if($status === true) {
        header("Location: index.html");
      } else {
          echo "Something went wrong";
      }
  }