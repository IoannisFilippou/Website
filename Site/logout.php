<?php 
session_start(); 

$appUserEmail = $_SESSION["authenticatedUser"]; 

session_destroy();

session_start(); //Start a new session so a message can be created

$_SESSION["message"] =  "User with $appUserEmail has logged out"; 

header("Location: index.php");   // Relocate back to the login page 
?>