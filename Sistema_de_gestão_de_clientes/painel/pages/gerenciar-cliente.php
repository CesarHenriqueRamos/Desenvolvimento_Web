<div class="box-container w100">
    <h2 class="title"><i class="far fa-list-alt"></i> Clientes Cadastrados</h2>
    <hr>
   <div class="boxes">
       <?php 
       $clientes = Painel::selectClientes('tb_admin.clientes');
       foreach($clientes as $key => $value){ ?>
        <div class="box-single-wraper">
            <div class="box-single">
                <div class="box-top">
                <?php if($value['imagem']){ ?>
                    <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['imagem'] ?>" alt="">
                <?php }else{ ?>
                    <h2><i class="fa fa-user"></i></h2>                    
                <?php } ?>
                </div><!--box-top-->
                <div class="box-body">
                    <p><b><i class="fa fa-user"></i> Nome:</b> <?php echo $value['nome'] ?></p>
                    <p><b><i class="fa fa-at"></i> Email:</b> <?php echo $value['email'] ?></p>
                    <p><b><i class="fa fa-pen"></i> Tipo:</b> <?php echo ucfirst($value['tipo']) ?></p>
                    <p><b><i class="fa fa-pen"></i> <?php if($value['tipo'] == 'fisico'){ echo 'CPF';}else{echo 'CNPJ';} ?>:</b> <?php echo $value['cpf_cnpj'] ?></p>
                    <div class="botao">                    
                        <!--botão de editar-->
                        <a href="<?php echo INCLUDE_PATH_PAINEL?>editar-cliente?id=<?php echo $value['id'];?>" class="margem-botao"><div class="col-bt editar"><i class="fas fa-pencil-alt"></i></div><!--col--></a> 
                        <!--botão de deletar-->                    
                        <a item_id=<?php echo $value['id'] ?> href="" class="margem-botao"><div item_id=<?php echo $value['id'] ?> class="col-bt delete"><i class="fas fa-trash"></i></div><!--col--></a>
                    </div> <!--botao--> 
                    <!--fim dos botoes-->
                </div><!--box-body-->                
            </div><!--box-single-->
        </div><!--box-single-wraper-->
       <?php } ?>
   </div><!--boxes-->
   <div class="clear"></div>
</div><!--tabela-responciva-->
 