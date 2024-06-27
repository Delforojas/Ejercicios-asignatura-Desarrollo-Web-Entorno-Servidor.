<?php
require_once("ejemplo14_Database_datos.php");

class Database {
    protected $conexion;
    public function __construct($host = HOST, $user = USER, $pass = PASSWORD, $dbname = DATABASE){
        $this->conexion = new mysqli($host, $user, $pass, $dbname);
        if($this->conexion->connect_error){
            die("Error de conexion con la base de datos: " . $this->conexion->connect_error);
        }
    }
    public function destruct()
    {
      $this->conexion->close();
    }
}
?>
