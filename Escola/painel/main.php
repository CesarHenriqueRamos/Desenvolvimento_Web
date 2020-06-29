<?php
    if(isset($_GET['logout'])){
        Painel::logout();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
    <meta name="author" content="Cesar Henrique Ramos">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
    <title>Painel de Controle</title>
</head>
<body>
<header>
		<div class="container">
			<div class="menu-btn">
                <i class="fa fa-bars" ></i>
            </div>
            <div class="logout">
            <div  class="btn-home" >
                <a <?php if(@$_GET['url'] == ''){ ?>class="home"<?php } ?> href="<?php echo INCLUDE_PATH_PAINEL; ?>"><i class="fas fa-home"></i> Home</a>
            </div>
            <a  href="<?php echo INCLUDE_PATH_PAINEL; ?>?logout"><i class="fas fa-sign-out-alt"></i> LogOut</a>
            </div>
		<div class="clear"></div><!--clear-->
		</div><!--container-->
    </header>
    <div class="conteudo">
        <div class="container">
            <?php Painel::carregarPagine();?>
        </div>        
    </div>
    <div class="menu">
        <div class="menu-wraper">
            <div class="box-usuario">
                <?php //if(//$_SESSION['img'] == ''){?>
                <div class="avata-user"><i class="fa fa-user"></i></div>
                <?php //} else{?>
                    <div class="img-user"><img src="<?php INCLUDE_PATH_PAINEL?>uploads/<?php echo $_SESSION['img'];?>" alt="">
                <?php// }?>    
                    <p id="bem-vindo"><?php //echo $_SESSION['nome'] ?></p>
                    <p id="cargo"><?php// echo pegaCargo($_SESSION['cargo']);?></p>
                    <hr>
               
            </div><!--boo-usuario-->
            <div class="items-menu">
                    <h2>Cadastro</h2>
                        <a <?php selecionadoMenu('cadastrar-aluno'); ?> href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-aluno">Cadastro de Aluno</a>
                        <a <?php selecionadoMenu('cadastrar-materia'); ?> href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-materia">Cadastro de Materia</a>
                        <a <?php selecionadoMenu('cadastrar-atividade'); ?> href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-atividade">Cadastro de Atividade</a>
                    <h2>Atividades</h2>
                        <a <?php selecionadoMenu('listar-atividade'); ?> href="<?php echo INCLUDE_PATH_PAINEL?>listar-atividade">Lista Atividade</a>
                        <a <?php selecionadoMenu('atribuir-atividade'); ?> href="<?php echo INCLUDE_PATH_PAINEL?>atibuir-atividade">Atribuir Atividade</a>

            </div><!--itens-menu-->
        </div>     
        <div class="clear"></div>
    </div>
    
    

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL; ?>js/script.js"></script>
</body>
</html>