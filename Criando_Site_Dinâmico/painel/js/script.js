$(function() {
    $('div.ocultacao i').click(function(){
        var menu_lateral = $('.menu_lateral');
        var header = $('header');
        var conteudo = $('.conteudo')

        if(menu_lateral.is(":hidden") == true){
            menu_lateral.fadeIn();;
            header.css('width', 'calc(100% - 300px)');
            header.css('left', '300px');
            conteudo.css('width', 'calc(100% - 300px)');
            conteudo.css('left', '300px');
        }else{
            menu_lateral.fadeOut();
            header.css('width', '100%');
            header.css('left', '0');
            conteudo.css('width', '100%');
            conteudo.css('left', '0');
        }
    });

})