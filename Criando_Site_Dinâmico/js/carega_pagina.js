/*$(function(){
    var atual = -1;
    //a box-especial é a box que emcapsula todo o conteudo
    var maximo = $('.container-principal').length -1;
    var time;
    var animacaoDelay = 3;
    executarAnimacao();
    function executarAnimacao(){
        $('.box-especial').hide();
        time = setInterval(logicaAnimacao,animacaoDelay * 1000);

        function logicaAnimacao(){
            atual++;
            if(atual > maximo){
                clearInterval(time);
                return false;
            }
            $('.container-principal').eq(atual).fadeIn();
        }
    }
})*/
    carregaDinamico();
    function carregaDinamico(){
        $('[realtime]').click(function(){
            var pagina = $(this).attr('realtime');
            $('.container-principal').load('/Meus_Projetos/Desenvolvimento_Web/Desenvolvimento_Web/Criando_Site_Dinâmico/pages/'+pagina+'.php');
            initialize();
            addMarker(-27.609959,-48.576585,'',"Minha casa",undefined,false);
            return false;
        })
    }
