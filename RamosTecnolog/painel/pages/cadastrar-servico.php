<div class="box-container w100">
    <h2 class="title"><i class="far fa-plus-square"></i> Adicionar Serviço</h2>
    <hr>

    <form action="" method="post" enctype="multipart/form-data" id="editar-usuario">
 
	<?php
        if(isset($_POST['acao'])){
                        
            //Incerção dinamica
            $servico = $_POST['servico'];
            $imagem = $_FILES['imagem'];
            $descricao = $_POST['descricao'];
            //validação
            if($servico == ''){
                Painel::alert('erro', 'É Necessário Preencher o Campo Serviço');
            }else if(Painel::imagemValida($imagem) == false){
                Painel::alert('erro', 'Insira Uma Imagem Valida');
            }else{
                //função cadastra no banco de dados os dados
                //include('../classes/lib/wideImage.php');
                $imagem = Painel::uploadFile($imagem);
                //para redimencionar a imagem
                //WideImage::load('uploads'.$imagem)->resize(100)->saveToFile('uploads'.$imagem);
                $arr = ['servico'=>$servico,'modelo'=>$imagem,'descricao'=>$descricao,'order_id'=>'0','nome_tabela'=>'tb_site.servico'];
                Painel::insert($arr);
                Painel::alert('sucesso', 'Cadastrado com Sucesso');
            }
           /*   if(Painel::insert($_POST)){
                Painel::alert('sucesso', 'Seviço Cadastrado com Sucesso');
            }else{
                Painel::alert('erro', 'Campos Vazios não São Permitidos');
            }*/      
	    }
		?>
        <div class="box-form">
            <label for="nome">Serviço:</label>
            <input type="text" name="servico" id="nome">
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
            <input type="hidden" name="order_id" value="0">        
            <input type="hidden" name="nome_tabela" value="tb_site.servico">        
            <input type="submit" name="acao" value="Cadastrar">
        </div>
    </form>
</div>

