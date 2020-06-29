$(function(){
    $('.ajax').ajaxForm({
        dataType:'json',
        beforeSend:function(){
            $('.ajax').animate({'opacity':'0.4'});
            $('.ajax').find('input[type=submit]').attr('disabled','true');
        },
        success:function(data){
            $('.ajax').animate({'opacity':'1'});
            $('.ajax').find('input[type=submit]').removeAttr('disabled');
            $('.box-alert').remove();
            if(data.sucesso){
                $('.mensagem').prepend('<div class="box-alert sucesso"><i class="fas fa-check"></i> Cliente cadastrado Com Sucesso</div>')
            }else{
                $('.mensagem').prepend('<div class="box-alert err"><i class="fas fa-check"></i> Erro ao Cadastrar o Cliente: '+data.erros+'</div>')
            }
            console.log(data);
        }
    })
});