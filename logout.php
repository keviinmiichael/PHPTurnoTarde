<?php

session_start();
setcookie('id', '', time() - 10);
session_destroy();

header('location:login.php');
exit;

 ?>
