<div class="modal fade" id="modalCie100" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h3 class="modal-title" id="exampleModalLabel">Elegir CIE-10</h3>      
    </div>
    <div class="modal-body">
      <input type="text" placeholder="Buscar por código" name="cie10Md" id="cie10Mdi" class="form-control" />
      <table class="table table-hover" id="listaRtaCie100">
        
      </table>
    </div>
  </div>
</div>
</div>

<script>
$(document).ready(function(){
  $("#cie10Mdi").keyup(function(){
    var palabra = $("#cie10Mdi").val();    
    $.ajax({
      url : 'libroNegro.php?op=cargarCie1',
      data : {
          palabra: palabra
      },
      type : 'POST',
      dataType : 'html',      
      success : function(data){
          $("#listaRtaCie100").html(data);

          $(".grabarCie").click(function(){
            var contenido = $(this).parent().parent().children()[0];            
            $("#ponerAquiCieB").html("<input type='text'class='claseInput' id='cie100' name='cie10' readonly value='"+$(contenido).data('cie')+"' >");
            //$("#listaRtaCie10").html("");
            //$("#cie10Md").val("");
          });
        }
    });  
  });
});

</script>