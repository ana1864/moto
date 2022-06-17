<?php 

session_start();
session_destroy();
header("location: ../motos/login.php");

?>