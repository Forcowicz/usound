<?php
ob_start();
session_start();

date_default_timezone_set('Europe/Warsaw');

$con = mysqli_connect("localhost", "root", "", "usound");
    if(mysqli_connect_errno()) {
        echo "Failed to connect to the database." . mysqli_connect_errno();
    }

