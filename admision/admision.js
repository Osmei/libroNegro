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
    $("#btnReg").click(function(event){
        event.preventDefault();        
        var params = $("#formAdmision").serialize();
        var sector = $( "#sector option:selected" ).text();             
        console.log(params);
        $.ajax({
            url : 'switch.php?op=registrarAdmision',
            data : {
                params:params
            },
            type : 'POST',
            dataType : 'text',      
            success : function(data){    
                if(data == "OK"){
                    alert("Admision registrada correctamente");
                    
                    $("input[type=text]").val("");
                    $("input[type=date]").val("");                                        
                    location.reload();
                }
            }
        });
    });

    $("#btnAdmiCargadas").click(function(){        
        location.href="listaAdmisiones.php";
    });
});