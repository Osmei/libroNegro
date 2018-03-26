$(document).ready(function(){
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
    $.ajax({
        url : 'switch.php?op=cargarTablaReady',
        data : {
            
        },
        type : 'POST',
        dataType : 'html',      
        success : function(data){    
            $("#contenidoTabla").html(data);
        }
    });
    $("#buscarAdmi").click(function(e){
        e.preventDefault();
        var datos = $("form").serialize();
        $.ajax({
            url : 'switch.php?op=cargarTablaFiltros',
            data : {
                datos: datos
            },
            type : 'POST',
            dataType : 'html',      
            success : function(data){    
                $("#contenidoTabla").html(data);
            }
        });
    });
});