<div class="modal fade" id="modalCie10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h3 class="modal-title" id="exampleModalLabel">Elegir CIE-10</h3>      
    </div>
    <div class="modal-body">
      <input type="text" placeholder="Buscar por código o nombre" name="cie10Md" id="cie10Md" class="form-control" />
      <ul id="listaRta">

      </ul>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary">Save changes</button>  
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>      
    </div>
  </div>
</div>
</div>

<script>
$(document).ready(function(){
  $("#cie10Md").keyup(function(){
    var palabra = $("#cie10Md").val();    
    $.ajax({
      url : 'libroNegro.php?op=cargarCie',
      data : {
          palabra: palabra
      },
      type : 'POST',
      dataType : 'html',      
      success : function(data){ console.log(data);
          $("#listaRta").html(data);
        }
    });  
  });
});
</script>