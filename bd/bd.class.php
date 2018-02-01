<?php
class bd{

    public $conn;

    public function __construct(){        
        $this->conn = new mysqli("localhost","root","f1882,cM-N","LibroNegro");
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