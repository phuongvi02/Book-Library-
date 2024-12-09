<?php 
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];

$_SESSION['username']= $user;
$_SESSION['password']= $pass;


header("Location: index.php");

?>
