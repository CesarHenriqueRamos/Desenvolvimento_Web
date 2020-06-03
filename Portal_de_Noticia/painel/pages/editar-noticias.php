<?php
    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        $dados = Painel::select("tb_site.noticias", 'id = ?',$id);
    }else{
        Painel::alert('erro', 'Ocorreu Um Erro');
        Painel::redirect(INCLUDE_PATH_PAINEL.'listar-servico'); 
    }
?>

<div class="box-container w100">
    <h2 class="title"><i class="far fa-edit"></i> Editar Depoimento</h2>
    <hr>
 <?php
    if(isset($_POST['acao'])){
        //enviado o formulario
        $titulo = $_POST['titulo'];
        $imagem = $_FILES['imagem'];
        $imagem_atual = $_POST['imagem_atual'];
        $conteudo = $_POST['conteudo'];
        $categoria_id = $_POST['categoria_id'];
        $order_id = $_POST['order_id'];
        $id = $_GET['id'];

        //validação
        if($titulo == ''){
            Painel::alert('erro', 'É Necessário Preencher o Campo Titulo');
        }else if($conteudo == ''){
            Painel::alert('erro', 'É Necessário Preencher o Campo Conteudo');
        }else if(Painel::imagemValida($imagem) == false){
            $imagem = $imagem_atual;
            $arr = ['categoria_id'=>$categoria_id,'titulo'=>$titulo,'conteudo'=>$conteudo,'capa'=>$imagem,'order_id'=>$order_id,'nome_tabela'=>'tb_site.noticias','id'=>$id];
            Painel::update($arr);
            Painel::alert('sucesso', 'Cadastrado com Sucesso');
        }else{
            //função cadastra no banco de dados os dado
            $imagem = Painel::uploadFile($imagem);
            Painel::deleteFile($imagem_atual);
            $arr = ['categoria_id'=>$categoria_id,'titulo'=>$titulo,'conteudo'=>$conteudo,'capa'=>$imagem,'order_id'=>$order_id,'nome_tabela'=>'tb_site.noticias','id'=>$id];
            Painel::update($arr);
            Painel::alert('sucesso', 'Cadastrado com Sucesso');
        }
    }
 ?>
    <form action="" method="post" enctype="multipart/form-data" id="editar-usuario">

    
   
        <div class="box-form">
            <label for="nome">Nome:</label>
            <input type="text" name="titulo" id="nome" value="<?php echo $dados['titulo'] ?>">
        </div>
        <div class="box-form">
            <label for="mensagem">Mensagem:</label>
            <textarea name="conteudo" id="conteudo" cols="30" rows="10" ><?php echo $dados['conteudo'] ?></textarea>
        </div>
        <div class="box-form">
            <label for="img">Imagem:</label>
            <input type="file" name="imagem">
            <input type="hidden" name="imagem_atual" value="<?php echo $dados['capa'] ?>">
        </div>
        <div class="box-form">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>"> 
            <input type="hidden" name="order_id" value="<?php echo $dados['order_id']; ?>"> 
            <input type="hidden" name="categoria_id" value="<?php echo $dados['categoria_id']; ?>">        
            <input type="submit" name="acao" value="Editar">
        </div>
    </form>
</div>

