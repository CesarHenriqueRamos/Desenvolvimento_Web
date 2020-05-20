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
            <a  href="<?php echo INCLUDE_PATH_PAINEL; ?>?logout"><i class="fas fa-sign-out-alt"></i> LogOut</a>
            </div>
		<div class="clear"></div><!--clear-->
		</div><!--container-->
    </header>
    <div class="conteudo">
        <div class="container">
            
            <div class="box-container w100">
            <h2 class="title"><i class="fas fa-home"></i> Painel de Controle</h2>
                <div class="w33 user marge-right">
                    <h3>Usuarios Online</h3>
                    <p>3</p>
                </div>
                <div class="w33 visita marge-right">
                    <h3>Total de Visitas</h3>
                    <p>100</p>
                </div>
                <div class="w33 visita-hoje">
                    <h3>Visitas Hoje</h3>
                    <p>5</p>
                </div>
            </div>
            <div class="box-container w100"></div>
            <div class="box-container w50 marge-right"></div>
            <div class="box-container w50"></div>
            
            <div class="box-container w100"></div>
            
        </div>
        
        <?php
            /*for($i = 0; $i <10000; $i++){
                echo 'Teste<br>';
            }*/
        ?>
        
        <div class="clear"></div>
    </div>
    <div class="menu">
        <div class="menu-wraper">
            <div class="box-usuario">
                <?php if($_SESSION['img'] == ''){?>
                <div class="avata-user"><i class="fa fa-user"></i></div>
                <?php } else{?>
                    <div class="img-user"><img src="<?php INCLUDE_PATH_PAINEL?>uploads/<?php echo $_SESSION['img'];?>" alt="">
                <?php }?>    
                    <p id="bem-vindo"><?php echo $_SESSION['nome'] ?></p>
                    <p id="cargo"><?php echo pegaCargo($_SESSION['cargo']);?></p>
                    <hr>
               
            </div><!--boo-usuario-->
            <div class="items-menu">
                    <h2>Cadastro</h2>
                        <a href="">Cadastro de Depoimento</a>
                        <a href="">Cadastro de Serviço</a>
                        <a href="">Cadastro de Slides</a>
                    <h2>Gestão</h2>
                        <a href="">Lista de Depoimento</a>
                        <a href="">Lista de Serviço</a>
                        <a href="">Lista de Slides</a>
                    <h2>Administrador</h2>
                        <a href="">Editar Usuario</a>
                        <a href="">Adcionar Usuario</a>
                    <h2>Configuração Geral</h2>
                        <a href="">Editar</a>
            </div><!--itens-menu-->
        </div>     
        <div class="clear"></div>
    </div>
    
    

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL; ?>js/script.js"></script>
</body>
</html>