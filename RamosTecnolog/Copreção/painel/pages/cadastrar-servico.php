<div class="box-container w100">
    <h2 class="title"><i class="far fa-plus-square"></i> Adicionar Serviço</h2>
    <hr>

    <form action="" method="post" enctype="multipart/form-data" id="editar-usuario">
 
	<?php
        if(isset($_POST['acao'])){
                        
          //enviado o formulario
          $servico = $_POST['servico'];
          $descricao = $_POST['descricao'];
          $imagem = $_FILES['imagem'];
          $valor = $_POST['valor'];
          //validação
          if($servico == ''){
              Painel::alert('erro', 'É Necessário Preencher o Campo Serviço');
          }else if($descricao == ''){
              Painel::alert('erro', 'É Necessário Preencher o Campo Nome');
          }else if(Painel::imagemValida($imagem) == false){
                Painel::alert('erro', 'Insira Uma Imagem Valida');
            }else{
                //função cadastra no banco de dados os dados
                $imagem = Painel::uploadFile($imagem);
                //para redimencionar a imagem
                $arr = ['servico'=>$servico,'modelo'=>$imagem,'descricao'=>$descricao,'valor'=>$valor,'order_id'=>'0','nome_tabela'=>'tb_site.servico'];
                Painel::insert($arr);
                Painel::alert('sucesso', 'Cadastrado com Sucesso');
            }
	    }
		?>
        <div class="box-form">
            <label for="nome">Serviço:</label>
            <input type="text" name="servico" id="nome">
        </div>
        <div class="box-form">
            <label for="nome">Valor do Serviço:</label>
            <input type="text" name="valor" id="nome">
        </div>
        <div class="box-form">
            <label for="img">Imagem:</label>
            <input type="file" name="imagem" id="img">
        </div>
        <div class="box-form">
            <label for="mensagem">Descrição:</label>
            <textarea name="descricao" id="mensagem" cols="30" rows="10"></textarea>
        </div>
        
        <div class="box-form"> 
                
            <input type="submit" name="acao" value="Cadastrar">
        </div>
    </form>
</div>

