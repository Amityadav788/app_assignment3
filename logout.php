<?php

session_start();
session_destroy();

header("location:http://localhost/assignment3/login.php");
exit;

?>
