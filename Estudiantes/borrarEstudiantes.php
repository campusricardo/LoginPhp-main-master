<?php 

require_once("Estudiante.php");


$record = new Estudiantes();

if (isset($_GET['id']) && isset($_GET['req']))
{
    if ($_GET["req"] == "delete")
    {
        $record-> setId($_GET["id"]);
        $record-> delete();
        echo "<script> alert('Los datos fueron borrados satisfactoriamente');document.location='estudiantes.php'</script>";
    }
}

?>