<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu saite">
    <meta name="keywords" content="palavar,chave, para, pesquisa, no,google">
    <meta name="author" content="Cesar Henrique Ramos">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <title>Site Dinamido</title>
</head>
<body>

    <header>
        <div class="container">
            <div class="logo"><a href="">Ramos Tecnolog</a></div><!--logo-->
            <nav class="desktop">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav><!--nav desktop-->
            
            <nav class="mobile">
                <div class="icon"><i class="fas fa-bars"></i></div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav><!--nav mobile-->
            <div class="clear"></div>
        </div><!--container-->
    </header>
    <section class="banner-principal">
        <div class="overlay"></div>
        <form action="" method="post" id="form-banner">
            <h2>Qual Seu Melhor Email?</h2>
            <input type="email" name="email" id="" required>
            <input type="submit" name="acao" value="Cadastrar">
        </form><!--form banner-principal-->
    </section><!--banner-principal-->
    <section class="descricao-autor">
        <div class="container">
            <div class="w50">
                <h2>Cesar Henrique Ramos</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div><!--w50-->
            <div class="w50">
                <!--pegar imagem depois-->
                <img src="img/cesar2.jpg" alt="">
            </div><!--w50-->
        </div><!--container-->
        <div class="clear"></div>
    </section><!--descrição autor-->
    <section class="especialidades">
        <div class="container">
            <h1 class="title">Especialidades</h1>
            <div class="w33">
                <h2>CSS</h2>
                <h3><i class="fab fa-css3-alt" style="color: #4C6EF5;"></i></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div><!--w33-->
            <div class="w33">                
                <h2>HTML</h2>
                <h3><i class="fab fa-html5" style="color:#FD7E14"></i></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div><!--w33-->
            <div class="w33">                
                <h2>JavaScript</h2>
                <h3><i class="fab fa-js" style="color: #82C91E;"></i></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div><!--w33-->
        </div><!--container-->
        <div class="clear"></div>
    </section><!--especialidades-->
    <section class="extras">
        <div class="container">
            <div class="w50">
                <h2>Depoimento</h2>
                <p class="depoimento-dscricao">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <h3 class="depoimento-altor">Autor 1</h3>
                <hr>
                <p class="depoimento-dscricao">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <h3 class="depoimento-altor">Autor 2</h3>
            </div><!--w50-->
            <div class="w50">
                <h2>Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Criação de Saites</li>
                        <li>Criação de Blog</li>
                        <li>Criação de Loja Virtual</li>
                        <li>Criação de Saite Empresarial</li>
                        <li>Criação de Jogos</li>
                        <li>Pentester</li>
                        <li>Computer Security</li>
                        <li>Design Gráfico</li>           
                    </ul>
                </div><!--servicos-->                
            </div><!--w50-->
        </div><!--container-->
        <div class="clear"></div>
    </section><!--extras-->
    <footer>
        <p>Todos os Direitos Reservados</p>
    </footer><!--footer-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>