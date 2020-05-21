<?php
    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $pass = $_POST['pass'];
        //$img = $_POST['img'];
        //$imgAtual = $_POST['img-atual'];
        //if($img == ''){
          //  $img = $imgAtual;
       // }
        Painel::alert('erro', 'enviado com sucesso');
    }
?>

<div class="box-container w100">
    <h2 class="title"><i class="fas fa-user-edit"></i> Editar Usuário</h2>
    <hr>

    <form action="" method="post" enctype="multipart/form-data" id="editar-usuario">
        <div class="box-form">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" require value="<?php echo $_SESSION['nome'] ?>">
        </div>
        <div class="box-form">
            <label for="pass">Senha:</label>
            <input type="password" name="pass" require value="<?php echo $_SESSION['password'] ?>">
        </div>
        <div class="box-form">
            <label for="img">Imagem:</label>
            <input type="file" name="img">
            <input type="hidden" name="img-atual" value="<?php echo $_SESSION['img'] ?>">
        </div>
        <div class="box-form">            
            <input type="submit" name="acao" value="Atualizar">
        </div>
    </form>
</div>

