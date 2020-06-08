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
            $dado = Painel::selectAll('tb_site.noticias');
            foreach($dado as $key => $value){
            ?>
            <div class="conteudo-single">
                <h3><?php echo $value['titulo'] ;?></h3>
                <div class="mini-img">
                    <img src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $value['capa'];?>" alt="">
                </div>
                <a href="<?php echo INCLUDE_PATH; ?>noticia?id=<?php echo $value['id'];?>">
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
