<?php

session_start();

session_unset();
session_destroy();

header("location:login.php");

include 'header.php';
include 'footer.php';
include 'dbconnect.php';

?>