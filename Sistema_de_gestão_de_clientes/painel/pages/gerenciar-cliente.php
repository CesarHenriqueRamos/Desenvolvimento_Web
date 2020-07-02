<div class="box-container w100">
    <div class="busca">
        <h4><i class="fa fa-search"></i> Buscar Cliente</h4>
        <form action="" method="post">
            <input type="text" name="busca" id="" placeholder="Procure por: Nome,Email,CPF ou CNPJ">
            <input type="submit"name="pesquisa" value="Buscar">
        </form>
        <div class="clear"></div>
    </div>

</div>
<div class="box-container w100">
    <h2 class="title"><i class="far fa-list-alt"></i> Clientes Cadastrados</h2>
    <hr>
    
    <div class="boxes">
    <?php
       $query = ""; 
       if(isset($_POST['pesquisa'])){        
        $busca = $_POST['busca'];
        $query = " WHERE nome LIKE '%$busca%' OR email LIKE '%$busca%' OR cpf_cnpj LIKE '%$busca%'";
       // $clientes = MySql::connect()->prepare("SELECT * FROM `$tabela` $query");
        }  
      $sql = MySql::connect()->prepare("SELECT * FROM `tb_admin.clientes` $query");
       $sql->execute();     
       $clientes = $sql->fetchAll();
       foreach($clientes as $key => $value){ 
        if(isset($_POST['pesquisa'])){
            echo '<div class="busca-result"><p>Foram Encontrados '.count($clientes).' Resultado</p></div>';   
        }

    ?>
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
 