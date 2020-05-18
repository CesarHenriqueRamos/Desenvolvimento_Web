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
			<div class="logo left"><a href="/">Logomarca</a></div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a  href="<?php echo INCLUDE_PATH_PAINEL; ?>?logout"><i class="fas fa-sign-out-alt"></i> LogOut</a></li>
				</ul>
			</nav>
			 <nav class="mobile right">
			 	<div class="botao-menu-mobile">
			 		<i class="fa fa-bars" aria-hidden="true"></i>
			 	</div>
                 <ul>
					<li><a  href="<?php echo INCLUDE_PATH_PAINEL; ?>logout"><i class="fas fa-sign-out-alt"></i> LogOut</a></li>
				</ul>
			</nav>
		<div class="clear"></div><!--clear-->
		</div><!--center-->
    </header>
    <div class="menu_lateral">
    <div class="ap">
        <?php if($_SESSION['img'] == ''){?>
            <div class="avata-user"><i class="fa fa-user"></i></div>
        <?php } else{?>
            <div class="img-user"><img src="<?php INCLUDE_PATH_PAINEL?>uploads/<?php echo $_SESSION['img'];?>" alt="">
        <?php }?>    
            <p id="bem-vindo"><?php echo $_SESSION['nome'] ?></p>
            <p id="cargo"><?php echo pegaCargo($_SESSION['cargo']);?></p>
            <hr>
        </div>
        <div class="clear"></div>
    </div>
    <div class="conteudo">
        <div class="ocultacao"><i class="fa fa-bars" aria-hidden="true"></i></div>
        
        
        <div class="clear"></div>
    </div>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>