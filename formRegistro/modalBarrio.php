<div class="modal fade" id="modalBarrio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h3 class="modal-title" id="exampleModalLabel">Elegir Barrio</h3>      
    </div>
    <div class="modal-body">
      <input type="text" placeholder="Buscar por barrio" name="barrio" id="barrio" class="form-control" />
      <table class="table table-hover" id="listaRta">
        
      </table>
    </div>
  </div>
</div>
</div>

<script>
$(document).ready(function(){
  $("#barrio").keyup(function(){
    var palabra = $("#barrio").val();    
    $.ajax({
      url : 'libroNegro.php?op=cargarBarrio',
      data : {
          palabra: palabra
      },
      type : 'POST',
      dataType : 'html',      
      success : function(data){
          $("#listaRta").html(data);

          $(".grabarBarrio").click(function(){
            var contenido = $(this).parent().parent().children()[0];            console.log($(contenido).data('barrio'));
            $("#ponerAquiBarrio").html("<input type='text' id='barrio' name='barrio' readonly class='form-control' value='"+$(contenido).data('barrio')+"'>");
            /*$("#listaRta").html("");
            $("#barrio").val("");*/
          });
        }
    });  
  });
});
</script>