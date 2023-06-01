<?php 
session_start();
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST["log"])){
    require_once("loginUser.php");

    $credenciales = new LoginUser();

    $credenciales-> setEmail($_POST["email"]);
    $credenciales-> setPassword($_POST["password"]);

    $login = $credenciales ->login();

    if ($login) {
        echo "<script> alert('password correcta')</script>";
        header('Location: ../Home/home.php');
    } else {
    echo "<script> alert(' Password/email invalidos');document.location='loginRegister.php';</script>";

    }

    
}

?>