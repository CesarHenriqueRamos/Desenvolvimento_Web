<?php
    $depoimenstos = Painel::selectAll("tb_site.depoimentos");
?>
<div class="box-container w100">
    <h2 class="title"><i class="far fa-list-alt"></i> Listar Depoimentos</h2>
    <hr>
    <div class="tabela-responciva depoimento">
                <div class="row">
                    <div class="col">
                        <span>Nome:</span>
                    </div><!--col-->
                    <div class="col">
                        <span>Depoimento:</span>
                    </div><!--col-->
                    <div class="col1">
                         <span>#</span>
                    </div><!--col-->
                    <div class="col1">
                        <span>#</span>
                    </div><!--col-->
                    <div class="clear"></div>
                </div><!--row-->
                <?php foreach($depoimenstos as $key =>$value){?>
                
                <div class="row">
                    <div class="col">
                        <span><?php echo $value['nome'];?></span>
                    </div><!--col-->
                    <div class="col">
                        <span><?php echo $value['depoimento'];?></span>
                    </div><!--col-->
                    <div class="col1 editar">
                        <a href=""><i class="fas fa-pencil-alt"></i> </a> 
                    </div><!--col-->
                    <div class="col1 delete">
                        <a href=""><i class="fas fa-trash"></i></a>  
                    </div><!--col-->
                    <div class="clear"></div>
                </div><!--row-->
                <?php } ?>
            </div><!--tabela-responciva-->
    
</div>