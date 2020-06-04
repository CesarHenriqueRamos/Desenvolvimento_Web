<section class="banner-container">	
		<div class="center">
        
		<form method="post">
        <h2><i class="fas fa-bell"></i> Gostaria de Receber informações em Seu E-mail?</h2>			
			<input type="email" name="email" required />
			<input type="hidden" name="identificador" value="form_home" />
			<input type="submit" name="acao" value="Cadastrar!">
		</form>
		</div><!--center-->
		
</section><!--banner-principal-->
<section class="conteudo">
    <div class="container"></div>
        <div class="w25">
            <div class="busca">
                <h2><i class="fas fa-search"></i> Realisar uma busca</h2>
                <form action="" method="post">
                    <input type="text" name="pesquisa" id="">
                    <input type="submit" value="Buscar">
                </form>
            </div>
            <!--teste-->
            <div class="busca">
                <h2>Selecione a Categoria</h2>
                <form action="" method="post">
                    <select name="" id="">
                    <?php 
                        $categoria = Painel::selectAll('tb_site.categorias');
                        foreach($categoria as $key => $value){
                    ?>
                        <option value="<?php echo $value['nome']; ?>"><?php echo $value['nome']; ?></option>
                <?php    } ?>
                    </select>
                </form>
            </div>
            <div class="busca">
                <h2><i class="fas fa-file-signature"></i> Autor</h2>
                <div class="autor">
                    <img src="<?php echo INCLUDE_PATH?>painel/uploads/cesar2.jpg" alt="autor Cesar Henrique Ramos">
                </div>
                <h3>Cesar Henrique</h3>
            </div>
        </div>
        <div class="w75">
            <h2>Visualisação de Post <span>Esporte</span></h2>
            
            <?php 
            for($i=0; $i < 10; $i++){
            ?>
            <div class="conteudo-single">
                <h3>Materia <?php echo $i ?></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Sollicitudin tempor id eu nisl. Quis hendrerit dolor magna eget. Imperdiet massa
                     tincidunt nunc pulvinar sapien et ligula ullamcorper. Dolor morbi non arcu risus quis varius quam quisque. 
                     Et leo duis ut diam quam nulla porttitor. Pellentesque elit ullamcorper dignissim cras. Vitae justo eget
                      magna fermentum iaculis eu non. Tellus elementum sagittis vitae et leo duis ut diam. Sed cras ornare 
                      arcu dui vivamus arcu felis bibendum ut. Ullamcorper velit sed ullamcorper morbi. Mi sit amet mauris 
                      commodo quis imperdiet massa tincidunt. Cursus eget nunc scelerisque viverra mauris in aliquam sem.
                       Semper viverra nam libero justo laoreet sit amet cursus sit. Integer vitae justo eget magna fermentum
                        iaculis eu. Mi bibendum neque egestas congue quisque egestas diam in arcu. Eget est lorem ipsum dolor
                     sit amet consectetur adipiscing elit. Pretium fusce id velit ut tortor pretium viverra suspendisse.</p>
                <a href="<?php echo INCLUDE_PATH; ?>noticia">
                    <div class="bt-ler">Leia mais</div>
                </a>
            </div><!--conteudo-->
            <?php    }   ?>           
           
            <div class="paginacao">
                <a class="active" href="">1</a>
                <a href="">2</a>
                <a href="">3</a>
            </div>
        </div>
    
    <div class="clear"></div>
</section>
