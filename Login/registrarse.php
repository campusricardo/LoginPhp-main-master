<?php 
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST["registrarse"])){
    require_once("RegistroUser.php");

    $registrar = new RegistroUser();

    $registrar->setIdCamper($_POST["idEstudiante"]);
    $registrar-> setEmail($_POST["email"]);
    $registrar-> setUsername($_POST["username"]);
    $registrar-> setPassword($_POST["password"]);



    if ($registrar->checkUser($_POST["email"])){
    echo "<script> alert('EL usuario ya existe'); document.location = 'loginRegister.php' </script>";

    } else {
        $registrar->insertData();
    echo "<script> alert('Se registo el Usuario'); document.location = '../Home/home.php'; </script>";

    }
}

?>