$(document).ready(function(){
    $("#loginBtn").click(function(){

        var params = $("form").serialize();
        console.log(params);

        $.ajax({
            url : 'index.php',
            data : {
                params: params
            },
            type : 'POST',
            dataType : 'text',      
            success : function(data){      
      
            }
        });
    });
});