<?php
class bd{

    public $conn;

    public function __construct(){
        $this->conn = new mysqli("localhost","root","s4ndr0","LibroNegro");

        if(!$this->conn){
            return false;
        }

        return $this->conn;
    }



}

?>