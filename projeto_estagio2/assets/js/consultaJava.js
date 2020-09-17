$(function() {

    //pesquisar pos cursos sem refresh na página
    $("#pesquisa").keyup(function() {
    
        var pesquisa =$(this).val();
    
    //verificar há algo digitado
    if(pesquisa !=''){
    var dados = {
        palavra : pesquisa
           }
    
    $.post('ProcuraRespostasEnt.php', dados, function(retorna){
        $(".resultado").html(retorna);
        });
    //mostra dentro da ul os resultados obtidos
    }
    else{
    
        $("resultado").html('');
    }
      });
    });
    
