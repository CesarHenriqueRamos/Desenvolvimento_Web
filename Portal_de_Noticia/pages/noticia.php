<?php
$id = 6;
$noticia = Painel::select('tb_site.noticias','id=?', $id);
?>
<section class="pg-conteudo-single">
    <div class="container">
        <div class="box-noticia">
            <h2><?php echo $noticia['titulo']; ?></h2>
            <div class="pg-noticia">
                <img src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $noticia['capa'];?>" alt="">
            </div>
            <p><?php echo $noticia['conteudo'];?></p>
            </div>
        </div>
        

</section>
