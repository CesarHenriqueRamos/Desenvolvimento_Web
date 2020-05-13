$(function(){
    $('body').on('submit','form',function(){
        var form = $(this);
        $.ajax({
            url:include_path+'ajax/formulario.php',
            method:'post',
            dataType:'json',
            data:form.serialize()
        }).done(function(data){
            console.log(data.retorno);
        });
        return false;
    });
});