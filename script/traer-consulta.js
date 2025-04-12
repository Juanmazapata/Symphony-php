$(buscar_datos());

function buscar_datos(consulta){
$.ajax({
   url: '../codigo/programa-consulta.php',
    type: 'POST',
    datatype: 'html',
    data:{consulta: consulta},
    
})  
   .done(function(respuesta){
    
   $('#programa').html(respuesta);
}) 
    .fail(function(){
    
     console.log("error");
})
    
    
}

$(document).on('keyup', '#txtconsultar-programa', function(){
    var valor = $(this).val();
    
    if(valor != ""){
       buscar_datos(valor);
        
       
       }else{
           
           buscar_datos();
       }
    
});