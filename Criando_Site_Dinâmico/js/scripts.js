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
        var icon = $('nav.mobile i');
        if(menuMobile.is(":hidden") == true){
            menuMobile.slideToggle();
            icon.removeClass('fa-bars');
            icon.addClass('fa-times');
        }else{
            menuMobile.slideToggle();
            icon.removeClass('fa-times');
            icon.addClass('fa-bars');
        }
    })
})