<?php
/* error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set("display_errors", 1); */
class bd{

    public $conn;

    public function __construct(){

        /**SANDRO WINDOWS */
        //$this->conn = new mysqli("localhost","root","s4ndr0i99i","LibroNegro");
        /**SANDRO LINIX */
        $this->conn = new mysqli("localhost","root","s4ndr0","libronegro");
        /**MAURI CASA */
        //$this->conn = new mysqli("localhost","libronegro","f1882,cM-N","LibroNegro");
        /**MAURI OFI 1 */
        //$this->conn = new mysqli("mysql.urgencias.local","root","f1882,cM-N","libronegro");
        /**MAURI OFI LOCALHOST */
        //$this->conn = new mysqli("localhost","root","","libronegro");

        if(!$this->conn){
            return false;
        }

        return $this->conn;
    }

    public function ejecutarQuery($sql){
		$vec = array();
		if($resultado = $this->conn->query($sql)){
			while($row = $resultado->fetch_assoc()){
				array_push($vec,$row);
			}
    	}
		return $vec;
	}

    public function ejecutarNonQuery($sql) {
        $resultado = $this->conn->query($sql);

        return $resultado;
    }

}

?>
