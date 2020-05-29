<?php
    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        $dados = Painel::select("tb_site.servico", 'id = ?',$id);
    }else{
        Painel::alert('erro', 'Ocorreu Um Erro');
        Painel::redirect(INCLUDE_PATH_PAINEL.'listar-servico'); 
    }
?>

<div class="box-container w100">
    <h2 class="title"><i class="far fa-edit"></i> Editar Depoimento</h2>
    <hr>

    <form action="" method="post" enctype="multipart/form-data" id="editar-usuario">
 <?php
    if(isset($_POST['acao'])){
            $servico = $_POST['servico'];
            $imagem = $_FILES['imagem'];
            $descricao = $_POST['descricao'];
            $id = $_POST['id'];
            $order_id = $_POST['order_id'];
            $imagem_atual = $_POST['imagem_atual'];
         if($imagem['name'] != ''){           
           
            //existe um upload de imagem
           if(Painel::imagemValida($imagem)){           
            Painel::deleteFile($imagem_atual);
            $imagem = Painel::uploadFile($imagem);
            $arr = ['servico'=>$servico,'modelo'=>$imagem,'descricao'=>$descricao,'order_id'=>$order_id,'nome_tabela'=>'tb_site.servico','id'=>$id];
                if(Painel::update($arr)){
                Painel::alert('sucesso', 'Depoimento Editado com Sucesso');
                $dados = Painel::select("tb_site.servico", 'id = ?',$id);
                }
            }else{
                    Painel::alert('erro', 'Ocorreu um Erro ao Editado'); 
                }
        }else{
            $imagem = $imagem_atual;
            $arr = ['servico'=>$servico,'modelo'=>$imagem,'descricao'=>$descricao,'order_id'=>$order_id,'nome_tabela'=>'tb_site.servico','id'=>$id];
            if(Painel::update($arr)){
                Painel::alert('sucesso', 'Depoimento Editado com Sucesso');
                $dados = Painel::select("tb_site.servico", 'id = ?',$id);
            }
        }
    }
 ?>
 <?php
    
    ?>
        <div class="box-form">
            <label for="nome">Serviço:</label>
            <input type="text" name="servico" id="nome" value="<?php echo $dados['servico'] ?>">
        </div>
        <div class="box-form">
            <label for="img">Imagem:</label>
            <input type="file" name="imagem" id="img">
            <input type="hidden" name="imagem_atual" value="<?php echo $dados['modelo'] ?>">
        </div>
        <div class="box-form">
            <label for="mensagem">Mensagem:</label>
            <textarea name="descricao" id="mensagem" cols="30" rows="10" ><?php echo $dados['descricao'] ?></textarea>
        </div>
        
        <div class="box-form">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>"> 
            <input type="hidden" name="order_id" value="<?php echo $dados['order_id']; ?>">        
            <input type="submit" name="acao" value="Editar">
        </div>
    </form>
</div>

