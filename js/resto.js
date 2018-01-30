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