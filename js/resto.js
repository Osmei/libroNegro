$("#form input").keyup(function(){
   var hClinica = $(this).parents("#form");
   var check = checkCampos(form);
 console.log(check);
   if(check){
     $("#my-bnt-carga").prop("disabled", false);
   }
   else{
     $("#my-btn-carga").prop("disabled", true);
   }
 });
});

function checkCampos(obj){
 var camposRellenados = true;
 obj.find("input").each(function(){
   var $this = $(this);
     if($this.val().length <= 0){
       camposRellenados = false;
       return false;
     }  
 });
 if(camposRellenados == false){
   return false;
 }
 else{
   return true;
 }
}  
/*var sala = $("#sala").val();
  if(sala==""||sala.length>=25||/^\s+$/.test(sala)){
     $("#salaRta").addClass("incorrecto");
     $("#salaRta").html("Datos incorrectos");
        }else{
           $("#salaRta").addClass("correcto");
           $("#salaRta").html("Campo Válido");
        }*/
/*var cama = $("#cama").val(); 
  if(cama==""||cama.length>=25||/^\s+$/.test(cama)){
     $("#camaRta").addClass("incorrecto");
     $("#camaRta").html("Datos incorrectos");
        }else{
           $("#camaRta").addClass("correcto");
           $("#camaRta").html("Campo Válido");
        }*/