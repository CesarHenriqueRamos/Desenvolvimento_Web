<?php verificaPermissaoPagina(2);
    $id = $_GET['id'];
    $dado = Painel::select('tb_admin.clientes','id=?',$id);
?>
<div class="box-container w100" 

<?php
    verificaPermissaoMenu(2);
?>>
    <h2 class="title"><i class="fas fa-user-plus"></i> Editar Cliente</h2>
    <hr>
    <div class="mensagem"></div>

    <form class="ajax"  action="<?php echo INCLUDE_PATH_PAINEL ?>ajax/form.php" method="post"  enctype="multipart/form-data" >

        <div class="box-form">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $dado['nome'];?>">
        </div>
        <div class="box-form">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $dado['email']?>">
        </div>
        <div class="box-form">
            <label for="tipo">Cargo:</label>
            <select name="tipo" id="tipo">
               <option value="fisico">Fisico</option>
               <option value="juridico">Juridico</option>
            </select>
        </div>
        <?php if($dado['tipo'] == 'fisico'){?>
        <div class="box-form">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" value="<?php echo $dado['cpf_cnpj']?>">
        </div>
        <?php }else{?>
        <div  class="box-form">
            <label for="cnpj">CNPJ:</label>
            <input type="text" name="cnpj" id="cnpj">
        </div>
        <?php } ?>
        <div class="box-form">
            <label for="img">Imagem:</label>
            <input type="hidden" name="imagem_original" value="<?php echo $dado['imagem']?>">
            <input type="file" name="imagem" id="img">
        </div>
        <div class="box-form">            
            <input type="hidden" name="tipo_acao" value="atualizar_cliente">
            <input type="hidden" name="id" value="<?php echo $id; ?>">                
        </div>
        <div class="box-form">            
            <input type="submit" name="acao" value="Atualizar">
        </div>

    </form>
</div>