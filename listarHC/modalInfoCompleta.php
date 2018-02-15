<div class="modal fade" id="todaLaInfoHC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <?php
    require_once("../includes/includes.php");

    $bd = new bd();
    if(isset($_POST['valHClinica'])){
      $nroHC = $_POST['valHClinica'];
    }
    $queryDatos = "SELECT *, s.nombreSala, c.nroCama, b.barrio, m.Nombre, ce.CausaEgreso
    FROM
      libronegro.historiaclinica h
        INNER JOIN
      sala s ON (h.Sala_idSala = s.idSala)
        INNER JOIN
      cama c ON (h.Cama_idCama = c.nroCama AND h.Sala_idSala = c.Sala_idSala)
        INNER JOIN
      barrio b ON (h.Barrio_idBarrio = b.idBarrio)
        INNER JOIN
      medico m ON (h.Medico_idMedico = m.DNI)
        INNER JOIN
      condicionegreso ce ON (h.CondicionEgreso_idCondicionEgreso = ce.idCondicionEgreso)
        WHERE nroHC = ".$nroHC;
    $data = $bd->ejecutarQuery($queryDatos);
  ?>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <?php          
          foreach ($data as $row){
        ?>
        <h4 class="modal-title" id="exampleModalLabel">
        Nro. Historia Clínica: 
        <?php
          echo $row['nroHC'];
        ?>
        </h4>
      </div>
      <div class="modal-body">
        <?php
          echo "Fecha de Ingreso: ". $row['fechaDeIngreso']."<br>";
          echo "Nombre y Apellido: ". $row['ApellidoNombre']."<br>";
          echo "DNI: ". $row['DNI']."<br>";
          echo "Sala: ". $row['nombreSala']."<br>";
          echo "Cama: ". $row['nroCama']."<br>";
          echo "Sexo: ". $row['Sexo']."<br>";
          echo "Edad: ". $row['Edad']."<br>";
          echo "Accidente: ". $row['Accidente']."<br>";
          echo "CIE 10 - Ingreso: ". $row['CIE10_idCIE10_ingreso']."<br>";
          echo "Barrio: ". $row['barrio']."<br>";
          echo "Médico: ". $row['Medico_idMedico']." - ".$row['Nombre']."<br>";
          echo "CIE 10 - Intermedio: ". $row['CIE10_idCIE10_intermedio']."<br>";
          echo "CIE 10 - Egreso: ". $row['CIE10_idCIE10_egreso']."<br>";
          echo "Edad: ". $row['Edad']."<br>";
          echo "Fecha de Alta: ". $row['fechaDeAlta']."<br>";
          echo "Condición de Egreso: ". $row['CausaEgreso']."<br>";
        ?>
        <?php
          }
        ?>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>        
      </div>
    </div>
  </div>
</div>