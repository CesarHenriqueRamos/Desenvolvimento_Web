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
            <label for="user">Login do Usuario:</label>
            <input type="text" name="user" id="user">
        </div>
        <div class="box-form">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div class="box-form">
            <label for="pass">Senha:</label>
            <input type="password" name="password" id="pass">
        </div>
        <div class="box-form">
            <label for="cargo">Cargo:</label>
            <select name="cargo" id="cargo">
               
            </select>
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

