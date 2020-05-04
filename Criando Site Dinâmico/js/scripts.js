$(function(){
    $('nav.mobile i').click(function(){
        var menuMobile = $('nav.mobile ul');
    // abrir Ou Fechar O menu
        //fadeIn
        /*if(menuMobile.is(":hidden") == true){
            menuMobile.fadeIn();
        }else{
            menuMobile.fadeOut();
        }*/
        //slideToggle
        menuMobile.slideToggle();
    })
})