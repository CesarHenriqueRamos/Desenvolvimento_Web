<?php
    $pagineAtual = isset($_GET['pagina'])?(int)$_GET['pagina']: 1;
    //alterar para almentar a quantidade de noticias por pagina
    $porPagina = 2;
   
?>
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
                        <option value=""  selected>Todas as Categorias</option>
                    <?php 
                        $categoria = Painel::selectAll('tb_site.categorias');
                        foreach($categoria as $key => $value){
                    ?>
                        <option <?php if($value['slug'] == $_GET['cat']) echo 'selected';?> value="<?php echo $value['slug']; ?>"><?php echo $value['nome']; ?></option>
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
            <?php
                $url = @$_GET['cat'] ;
                $categoria = MySql::connect()->prepare('select * FROM `tb_site.categorias` where slug = ?');
                $categoria->execute(array($url));                
                //
                if($categoria->rowCount()){
                    $categoria = $categoria->fetch();
                    $cat = $categoria['slug'];
                }else{
                    $cat = '';
                }
            
                
                if($url == '' || $url != $cat){
                    echo ' <h2>Visualisação de Post</h2>';
                    $dado = Painel::selectAll("tb_site.noticias",($pagineAtual -1)*$porPagina,$porPagina);
                }else{
                    echo ' <h2>Visualisação de Post <span>'.$categoria['nome'].'</span></h2>';
                    $dado = Painel::selectExept("tb_site.noticias",'categoria_id = ?',$categoria['id'],($pagineAtual -1)*$porPagina,$porPagina);
                }
            ?>
            
            <?php 
            
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
                <?php
                    if($_GET['cat'] == ''){
                        $totalPaginas = ceil(count(Painel::selectAll("tb_site.noticias"))/$porPagina);
                    }else{
                        $totalPaginas = ceil(count(Painel::select("tb_site.noticias",'categoria_id=?',$categoria['id']))/$porPagina);
                    }
                    
                    for($i =1; $i <= $totalPaginas; $i++){
                        if($i == $pagineAtual)
                            echo  '<a class="active" href="'.INCLUDE_PATH.'?cat=&pagina='.$i.'">'.$i.'</a>';
                        else
                            echo  '<a  href="'.INCLUDE_PATH.'?cat='.$_GET['cat'].'&pagina='.$i.'">'.$i.'</a>';

                    }
                ?>
                
                </div>
            
        </div>
    
    <div class="clear"></div>
</section>
