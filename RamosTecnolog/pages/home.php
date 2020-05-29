<section class="banner-container">	
	<div class="overlay"></div><!--overlay-->
		<div class="center">
		<form method="post">
			<h2>Qual o seu melhor e-mail?</h2>
			<input type="email" name="email" required />
			<input type="hidden" name="identificador" value="form_home" />
			<input type="submit" name="acao" value="Cadastrar!">
		</form>
		</div><!--center-->
		
</section><!--banner-principal-->
    <section class="slider">
        <div class="container">
            <div class="slider-title"><h2>Slider</h2></div>
            <div class="slider-sigle sigle1"> </div>
            <div class="slider-sigle sigle2"></div>
            <div class="slider-sigle sigle3"></div> 
            <div class="bullets">
               
            </div>
            <div class="clear"></div>
        </div>
            
    </section>
    <section class="descricao-autor">
        <div class="container">
            <div id="sobre" class="w50">
                <h2>Cesar Henrique Ramos</h2>
                <p>Sou Programador a, sete anos, programo em várias linguagens, especializei na área web, com criações de sites e Aplicativos.</p>
                <p>Me formei em Análise e Desenvolvimento de Sistema, fiz varias especializações na área.</p>
            </div><!--w50-->
            <div class="w50">
                <!--pegar imagem depois-->
                <img src="<?php echo INCLUDE_PATH?>images/cesar2.jpg" alt="">
            </div><!--w50-->
        </div><!--container-->
        <div class="clear"></div>
    </section><!--descrição autor-->
    <section class="especialidades">
        <div class="container">
            <h1 class="title">Especialidades</h1>
            <div class="slider-sigle1">
                <div class="w33 especialidade-single">
                    <div class="box">
                    <h2>HTML</h2>
                    <h3><i class="fab fa-html5" style="color:#FD7E14;"></i></h3>
                    </div>  
                    
                </div><!--w33-->
                <div class="w33 especialidade-single">                
                    <div class="box">
                        <h2>CSS</h2>
                        <h3><i class="fab fa-css3-alt" style="color: #4C6EF5;"></i></h3>
                    </div> 
                </div><!--w33-->
                <div class="w33 especialidade-single"> 
                    <div class="box">
                        <h2>JavaScript</h2>
                        <h3><i class="fab fa-js" style="color: #82C91E;"></i></h3>
                    </div>              
                </div><!--w33-->
            </div>
            <div class="slider-sigle1">
                <div class="w33 especialidade-single">
                    <div class="box">
                    <h2>PHP</h2>
                    <h3><i class="fab fa-php" style="color:#5467B6;"></i></h3>
                    </div>  
                    
                </div><!--w33-->
                <div class="w33 especialidade-single">                
                    <div class="box">
                        <h2>JAVA</h2>
                        <h3><i class="fab fa-java" style="color: #D74126;"></i></h3>
                    </div> 
                </div><!--w33-->
                <div class="w33 especialidade-single"> 
                    <div class="box">
                        <h2>MySql</h2>
                        <h3><i class="fas fa-database" style="color: #ADADAD;"></i></h3>
                    </div>              
                </div><!--w33-->
            </div>
            <div class="slider-sigle1">
                <div class="w33 especialidade-single">
                    <div class="box">
                    <h2>React</h2>
                    <h3><i class="fab fa-react" style="color:#4C6EF5;"></i></h3>
                    </div>  
                    
                </div><!--w33-->
                <div class="w33 especialidade-single">                
                    <div class="box">
                        <h2>React Native</h2>
                        <h3><i class="fab fa-react" style="color: #5467B6;"></i></h3>
                    </div> 
                </div><!--w33-->
                <div class="w33 especialidade-single"> 
                    <div class="box">
                        <h2>Oracle DB</h2>
                        <h3><i class="fas fa-database" style="color: #ADADAD;"></i></h3>
                    </div>              
                </div><!--w33-->
            </div>
        </div><!--container-->
        <div class="clear"></div>
    </section><!--especialidades-->
    <section class="extras">
        <div class="container">
            <div class="w50">
                <h2>Depoimento</h2>
                <?php
                   $depoimentos = Painel::selectAll('tb_site.depoimentos',0,3);
                   foreach ($depoimentos as $key => $value) {                      
                ?>
                <p class="depoimento-dscricao"><?php echo $value['depoimento'];?></p>
                <h3 class="depoimento-altor"><?php echo $value['nome'];?></h3>
                <hr>
                <?php  } ?>
            </div><!--w50-->
            <div id="servicos" class="w50">
                <h2>Serviços</h2>
                <div class="servicos">
                    <ul>
                <?php 
                    $servico = Painel::selectAll('tb_site.servico');
                        foreach($servico as $key => $value){
                ?>
                        <li><a href="<?php echo INCLUDE_PATH; ?>servico?id=<?php echo $value['id'];?>"><?php echo $value['servico'];?></a></li>
                        <?php } ?>          
                    </ul>
                </div><!--servicos-->                
            </div><!--w50-->
        </div><!--container-->
        <div class="clear"></div>
    </section><!--extras-->
