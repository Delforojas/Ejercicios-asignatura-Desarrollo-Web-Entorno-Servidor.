<?php
require_once("Database.php");

class City extends Database {

    private $ID;
    private $Name;
    private $CountryCode;
    private $District;
    private $Population;

    public function __construct(){
        parent::__construct();
    }

    //Getters
    public function getId() {return $this->ID;}
    public function getName() {return $this->Name;}
    public function getCountryCode() {return $this->CountryCode;}
    public function getDistrict() {return $this->District;}
    public function getPopulation() {return $this->Population;}
    //Setters
    public function setID($id) {return $this->ID = $id;}
    public function setName($nombre) {return $this->Name=$nombre;}
    public function setCountryCode($code) {return $this->CountryCode=$code;}
    public function setDistrict($distric) {return $this->District=$district;}
    public function setPopulation($poblacion) {return $this->Population=$poblacion;}

    //CRUD
    public function save() {
        $sql = "INSERT INTO City (Name, CountryCode, District, Population) VALUES ('".$this->Name."','".$this->CountryCode."','".$this->District."','".$this->Population."')";
        $result = $this->conexion->query($sql);
        return $result;
    }

    public function get ($key ="ID", $value) {
        $sql = "SELECT * FROM City WHERE ". $key ."= " . $value;
        $result = $this-> conexion ->query($sql);
        if($result =num_rows > 0){
            $row =$resut->fetch_assoc();
            $this->setId($row['ID']);
            $this->setName($row['Name']);
            $this->setCountryCode($row['CountryCode']);
            $this->setDistrict($row['District']);
            $this->setPopulation($row['Population']);
        } else {
            return false;
        }
    }
    public function update() {
		$sql = "UPDATE City SET Name = '" . $this->Name . "', CountryCode = '" . $this->CountryCode . "', District = '" . $this->District . "', Population = '" . $this->Population . "' WHERE ID = " . $this->ID;
		$result = $this->conexion->query($sql);
		return $result;
	}

	public function delete() {
		$sql = "DELETE FROM City WHERE ID = " . $this->ID;
		$result = $this->conexion->query($sql);
		$this->destruct();
		return $result;
	}

	public function getListaCiudades($atributoOrden = "Population",$tipoOrden = "ASC") {
		$sql = "SELECT ID, Name, CountryCode, District, Population FROM city ORDER BY ".$atributoOrden." ". $tipoOrden;
		$result = $this->conexion->query($sql);
		if ($result->num_rows > 0) {
			return $result;
		} else {
			return "No hay nada en la lista de ciudades.";
		}
	}
}

?>

    