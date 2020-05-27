<div class="box-container w100" 

<?php
    verificaPermissaoMenu(2);
?>>
    <h2 class="title"><i class="fas fa-user-plus"></i> Cadastrar Slide</h2>
    <hr>

    <form action="" method="post" enctype="multipart/form-data" >
 
	<?php
        if(isset($_POST['acao'])){
            //enviado o formulario
            $nome = $_POST['nome'];
            $imagem = $_FILES['imagem'];
            //validação
            if($nome == ''){
                Painel::alert('erro', 'É Necessário Preencher o Campo Login');
            }else if(Painel::imagemValida($imagem) == false){
                Painel::alert('erro', 'Insira Uma Imagem Valida');
            }else{
                //função cadastra no banco de dados os dados
                Painel::addSlide($user,$senha,$imagem,$nome,$cargo);
                Painel::alert('sucesso', 'Cadastrado com Sucesso');
            }
        }
		?>
        <div class="box-form">
            <label for="nome">Nome do Slide:</label>
            <input type="text" name="nome" id="nome">
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

