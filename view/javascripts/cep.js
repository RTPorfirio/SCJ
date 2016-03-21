$(document).ready( function() {
   /* Executa a requisi��o quando o campo CEP perder o foco */
   $('#cep').blur(function(){
           /* Configura a requisi��o AJAX */
           $.ajax({
                url : '../configs/consultar_cep.php', /* URL que ser� chamada */ 
                type : 'POST', /* Tipo da requisi��o */ 
                data: 'cep=' + $('#cep').val(), /* dado que ser� enviado via POST */
                dataType: 'json', /* Tipo de transmiss�o */
                success: function(data){
                    if(data.sucesso == 1){
                        $('#rua').val(data.rua);
                        $('#bairro').val(data.bairro);
                        $('#cidade').val(data.cidade);
                        $('#estado').val(data.estado);
 
                        $('#numero').focus();
                    }
                }
           });   
   return false;    
   })
});