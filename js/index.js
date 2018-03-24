$(document).ready(function(){
    $("#loginBtn").click(function(){

        var params = $("form").serialize();
        

        $.ajax({
            url : 'index.php',
            data : {
                params: params
            },
            type : 'POST',
            dataType : 'text',      
            success : function(data){      
                switch (data) {
                    case 'NOUSER':
                        $("#status").html("Por favor ingrese un usuario.");
                    break;
                    case 'NOPASS':
                        $("#status").html("Por favor ingrese una contraseña.");
                    break;
                    case 'ERROR':
                        $("#status").html("Usuario y/o contraseña incorrecto.");
                    break;
                    case 'OK':
                       location.href="acciones.html"; 
                    break;                    
                }
            }
        });
    });
});