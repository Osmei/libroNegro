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
          echo "<span> Fecha de Ingreso: </span> ". $row['fechaDeIngreso']."<br>";
          echo "<span> Nombre y Apellido: </span> ". $row['ApellidoNombre']."<br>";
          echo "<span> DNI: </span> ". $row['DNI']."<br>";
          echo "<span> Sala: </span> ". $row['nombreSala']."<br>";
          echo "<span> Cama: </span> ". $row['nroCama']."<br>";
          echo "<span> Sexo: </span> ". $row['Sexo']."<br>";
          echo "<span> Edad: </span> ". $row['Edad']."<br>";
          echo "<span> Accidente: </span> ". $row['Accidente']."<br>";
          echo "<span> CIE 10 - Ingreso: </span> ". $row['CIE10_idCIE10_ingreso']."<br>";
          echo "<span> Barrio: </span> ". $row['barrio']."<br>";
          echo "<span> Médico: </span> ". $row['Medico_idMedico']." - ".$row['Nombre']."<br>";
          echo "<span> CIE 10 - Intermedio: </span> ". $row['CIE10_idCIE10_intermedio']."<br>";
          echo "<span> CIE 10 - Egreso: </span> ". $row['CIE10_idCIE10_egreso']."<br>";
          echo "<span> Edad: </span> ". $row['Edad']."<br>";
          echo "<span> Fecha de Alta: </span> ". $row['fechaDeAlta']."<br>";
          echo "<span> Condición de Egreso: </span> ". $row['CausaEgreso']."<br>";
        ?>
        <?php
          }
        ?>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Imprimir</button>        
      </div>
    </div>
  </div>
</div>