<?php
/*error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set("display_errors", 1);*/
class bd{

    public $conn;

    public function __construct(){        
        
        /**SANDRO CASA */
        //$this->conn = new mysqli("localhost","root","s4ndr0i99i","LibroNegro");
        /**SANDRO OFI */
        //$this->conn = new mysqli("localhost","root","s4ndr0","LibroNegro");
        /**MAURI OFI */
        $this->conn = new mysqli("localhost","root","f1882,cM-N","LibroNegro");

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
