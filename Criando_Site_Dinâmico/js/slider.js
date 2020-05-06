$(function(){
    var curSlider = 0;
    var delay = 3;
    var maxSlider = 2;
    changesSlide();
    function changesSlide(){
        
        setInterval(function(){            
            $('div.slider-sigle').hide();
            $('div.slider-sigle').eq(curSlider).show();
            curSlider++;
            if(curSlider > maxSlider){
                curSlider = 0;
            }
        }, delay * 1000);
    }
})