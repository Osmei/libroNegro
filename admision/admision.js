$(document).ready(function(){
    /** Cargar select de sector */
    $.ajax({
        url : 'switch.php?op=cargarSectorAdmision',
        data : {
            
        },
        type : 'POST',
        dataType : 'html',      
        success : function(data){    
            $("#sector").html(data);                  
          }
      });
});