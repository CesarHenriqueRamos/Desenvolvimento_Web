<?php include('config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu saite">
    <meta name="keywords" content="palavar,chave, para, pesquisa, no,google">
    <meta name="author" content="Cesar Henrique Ramos">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH?>css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <title>Site Dinamido</title>
</head>
<body>
    <?php
        $url = isset( $_GET['url'])? $_GET['url'] : 'home';
        switch($url){
            case 'sobre':
                echo '<target target="sobre"/>';
            break;
            case 'servico':
                echo '<target target="servico">';
            break;
        }
    ?>
    <header>
        <div class="container">
            <div class="logo"><a href="">Ramos Tecnolog</a></div><!--logo-->
            <nav class="desktop">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>contato">Contato</a></li>
                </ul>
            </nav><!--nav desktop-->
            
            <nav class="mobile">
                <div class="icon"><i class="fas fa-bars"></i></div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>contato">Contato</a></li>
                </ul>
            </nav><!--nav mobile-->
            <div class="clear"></div>
        </div><!--container-->
    </header>
    <?php
        
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            if($url != 'sobre' && $url != 'servicos'){
                include('pages/404.php');
            }else{
                include("pages/home.php");
            }            
        }

    ?>
    <footer>
        <p>Todos os Direitos Reservados</p>
    </footer><!--footer-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="<?php echo INCLUDE_PATH?>js/scripts.js"></script>  
    <?php
    if($url == 'contato'){
    ?>  
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4"></script>
    <script src="<?php echo INCLUDE_PATH?>js/google_maps.js"></script>
    <?php } ?>
</body>
</html>