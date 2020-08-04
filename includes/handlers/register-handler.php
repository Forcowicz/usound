<?php

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

      $status = $account->register($un, $fn, $ln, $em, $emv, $pw, $pwv);

      if($status) {
          header("Location: index.html");
      } else {
          echo "Something went wrong! Registration temporaly disabled!";
      }

  }