<?php
class estadistica{
    
    public $conn;

    public function __construct(){
        $this->conn = new bd();
    }

    public function porcentajeOcupacionCamas($fDesde, $fHasta){
        $queryCamasOcupadas = 'SELECT Sala_idSala, Cama_idCama 
                                FROM libronegro.historiaclinica 
                                WHERE fechaDeIngreso > "'.$fDesde.'"
                                    AND fechaDeAlta < "'.$fHasta.'"
                                GROUP BY Sala_idSala, Cama_idCama';
        $camas = $this->cantidadDeCamas();
    }

    public function giroCama($fDesde, $fHasta){
        $queryGenteDeAlta = 'SELECT * FROM libronegro.historiaclinica 
                                WHERE fechaDeIngreso > "'.$fDesde.'" 
                                    AND fechaDeAlta < "'.$fHasta.'"
                                    AND CondicionEgreso_idCondicionEgreso = "1"'
    }

    public function cantidadDeCamas(){
        $queryCamas = "SELECT * FROM cama";
        $camas = $this->conn->ejecutarQuery($queryCamas);        
        return $camas;
    }

}
?>