$(function(){
    var curSlider = 0;
    var delay = 3;
    //var maxSlider = 2;
    var maxSlider = $('.slider-sigle1').length - 1;
    changesSlide();
    //criar as bolinhas
    for(var i = 0; i < maxSlider+1; i++){
        var content = $('.bullets1').html();
        if(i == 0){
            content += '<span class="active-slider1"></span>'; 
        }else{
            content += '<span></span>';
        }
        
        $('.bullets1').html(content);
    }
    //função de colorir os bullet
    function colorBullet(){
        $('.bullets1 span').removeClass(); 
        $('.bullets1 span').eq(curSlider).addClass('active-slider1');         
            
    }
    function changesSlide(){
        
        setInterval(function(){            
            $('div.slider-sigle1').hide();
            $('div.slider-sigle1').eq(curSlider).show();  
            colorBullet(); 
            curSlider++;
            if(curSlider > maxSlider){
                curSlider = 0;
            }
        }, delay * 1000);
    }
    $('body').on('click','.bullets1 span', function(){
        var currentBullet = $(this);
        $('div.slider-sigle1').eq(curSlider).fadeOut();
        curSlider = currentBullet.index();
        $('div.slider-sigle1').eq(curSlider).fadeIn();
        colorBullet(); 
    });
    
})
