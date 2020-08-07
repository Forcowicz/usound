<?php

function sanitizeInputBasic($input) {
  return $input = strip_tags(str_replace(" ", "", $input));
}

function sanitizeInputPassword($input) {
  return $input = strip_tags($input);
}

function sanitizeInputNames($input) {
  return $input = strip_tags(str_replace(" ", "", ucfirst(strtolower($input))));
}

function sanitizeInputMessage($input) {
    $input = strip_tags($input);
    return $input = mysqli_real_escape_string($input);
}

function getInputValue($name) {
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}