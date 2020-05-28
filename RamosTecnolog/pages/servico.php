<?php
    $id = $_GET['id'];
    $servico = Painel::select('tb_site.servico','id = ?',$id);
   ?>    
<Section class="pg-servico">
    <div class="container">
        <h1><?php echo $servico['servico']; ?></h1>
        <div class="box">
            <h2>Descrição do Serviço:</h2>
            <p><?php echo $servico['descricao'];?></p>
        </div>
    </div>
</Section>