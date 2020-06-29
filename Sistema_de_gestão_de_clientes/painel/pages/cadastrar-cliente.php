<?php verificaPermissaoPagina(2);
    
?>
<div class="box-container w100" 

<?php
    verificaPermissaoMenu(2);
?>>
    <h2 class="title"><i class="fas fa-user-plus"></i> Adicionar Usuário</h2>
    <hr>
    <div class="mensagem"></div>

    <form  action="<?php echo INCLUDE_PATH_PAINEL ?>ajax/form.php" method="post"  enctype="multipart/form-data" class="ajax" >
 
	<?php
        if(isset($_POST['acao'])){
   echo 'entrou';
                
	    }
		?>
        <div class="box-form">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div class="box-form">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="box-form">
            <label for="tipo">Cargo:</label>
            <select name="tipo" id="tipo">
               <option value="fisico">Fisico</option>
               <option value="juridico">Juridico</option>
            </select>
        </div>
        <div class="box-form">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf">
        </div>
        <div style="display:none;" class="box-form">
            <label for="cnpj">CNPJ:</label>
            <input type="text" name="cnpj" id="cnpj">
        </div>
        <div class="box-form">
            <label for="img">Imagem:</label>
            <input type="file" name="imagem" id="img">
        </div>
        <div class="box-form">            
            <input type="submit" name="acao" value="Cadastrar">
        </div>
    </form>
</div>

