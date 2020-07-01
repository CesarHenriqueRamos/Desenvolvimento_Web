
<div class="box-container w100">
    <h2 class="title"><i class="far fa-list-alt"></i> Clientes Cadastrados</h2>
    <hr>
   <div class="boxes">
       <?php for($i=0;$i <10;$i++){ ?>
        <div class="box-single-wraper">
            <div class="box-single">
                <div class="box-top">
                    <h2><i class="fa fa-user"></i></h2>
                </div><!--box-top-->
                <div class="box-body">
                    <p><b><i class="fa fa-user"></i> Nome:</b> Cesar Henrique Ramos</p>
                    <p><b><i class="fa fa-at"></i> Email:</b> cesar252742@gmail.com</p>
                    <p><b><i class="fa fa-pen"></i> Tipo:</b> Fisico</p>
                    <p><b><i class="fa fa-pen"></i> CPF ou CNPJ:</b> 999.999.999-66</p>
                    <div class="botao">                    
                        <!--botão de editar-->
                        <a href="<?php echo INCLUDE_PATH_PAINEL?>editar-noticias?id=<?php echo $value['id']; ?>" class="margem-botao"><div class="col-bt editar"><i class="fas fa-pencil-alt"></i></div><!--col--></a> 
                        <!--botão de deletar-->                    
                        <a actionBtn="delete" href="<?php echo INCLUDE_PATH_PAINEL?>gerenciar-noticias?excluir=<?php echo $value['id']; ?>" class="margem-botao"><div class="col-bt delete"><i class="fas fa-trash"></i></div><!--col--></a>
                    </div> <!--botao--> 
                    <!--fim dos botoes-->
                </div><!--box-body-->                
            </div><!--box-single-->
        </div><!--box-single-wraper-->
       <?php } ?>
   </div><!--boxes-->
   <div class="clear"></div>
</div><!--tabela-responciva-->
 