<?php 
require_once("../Config/db.php");
require_once("../Config/conectar.php");

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Estudiantes extends Conectar {

    private $id;
    private $nombres;
    private $direccion;
    private $logros;
    private $ser;
    private $ingles;
    private $skills;
    private $review;
    private $especialidad;

    public function __construct($id = 0, $nombres = "", $direccion = "", $logros = "", $ser = "", $ingles = "", $skills = "", $review = "", $especialidad = "", $dbCnx = ""){
        $this->id = $id;
        $this->nombres = $nombres;
        $this->direccion = $direccion;
        $this->logros = $logros;
        $this->ser = $ser;
        $this->ingles = $ingles;
        $this->skills = $skills;
        $this->review = $review;
        $this->especialidad = $especialidad;
        parent::__construct($dbCnx);

    }

public function setId($id)
{
    $this->id = $id;
}

public function getId()
{
    return $this-> id;
}

public function setNombres($nombres)
{
    $this->nombres= $nombres;
}



public function getNombres()
{

    return $this->nombres;
}

public function setDireccion($direccion)
{
    $this->direccion = $direccion;
}

public function getDireccion()
{
    return $this->direccion;
}


public function setLogros($logros)
{
    $this->logros = $logros;
}

public function getLogros(){
    return $this->logros;
}

public function setSer($ser)
{
    $this->ser = $ser;
}

public function getSer(){
    return $this->ser;
}

public function setIngles($ingles)
{
    $this->ingles = $ingles;
}

public function getIngles(){
    return $this->ingles;
}

public function setSkills($skills)
{
    $this->skills = $skills;
}

public function getSkills(){
    return $this->skills;
}

public function setReview($review)
{
    $this->review = $review;
}

public function getReview(){
    return $this->review;
}

public function setEspecialidad($especialidad)
{
    $this->especialidad = $especialidad;
}

public function getEspecialidad(){
    return $this->especialidad;
}



public function insertData(){
    try {
        $stm = $this->dbCnx -> prepare("INSERT INTO campers (nombres, direccion, logros, ser, ingles, skills, review, especialidad) values(?,?,?,?,?,?,?,?)");
        $stm -> execute([$this->nombres, $this->direccion, $this->logros, $this->ser, $this->ingles,$this->skills,$this->review,$this->especialidad]);
    } catch (Exception $e) {
        return $e->getMessage();
    }

}
    public function obtainAll(){
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM campers");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
            //throw $th;
        }
    }

    public function delete(){
        try { 
            $stm = $this->dbCnx->prepare("DELETE FROM campers WHERE id = ?");
            $stm-> execute([$this->id]);
            return $stm-> fetchAll();
            echo "<script> alert('Registro eliminado'); document.location='estudiantes.php';</script>";
        } catch(Exception $e) {
            return $e-> getMessage();
        }
    }
    public function selectOne(){
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM campers WHERE id= ?");
            $stm -> execute([$this->id]);
            return $stm ->fetchAll();
        } catch(Exception $e) {
            return $e-> getMessage();
        }

    }

    public function update()
    {
        try {
            $stm = $this-> dbCnx -> prepare("UPDATE campers SET nombres = ?, direccion = ?, logros = ?, ser = ?, ingles = ?, skills = ?, review = ?, especialidad = ? WHERE id = ?");
            $stm -> execute([$this->nombres, $this->direccion, $this->logros, $this->ser, $this->ingles, $this->skills, $this->review, $this->especialidad, $this->id]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
?>