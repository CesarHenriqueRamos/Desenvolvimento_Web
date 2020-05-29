<?php
    $id = $_GET['id'];
    $servico = Painel::select('tb_site.servico','id = ?',$id);
   ?>    
<Section class="pg-servico">
    <div class="container pg-servico">
        <h1><?php echo $servico['servico']; ?></h1>
        <div class="box">
            <h2>Descrição do Serviço:</h2>
            <p><?php echo $servico['descricao'];?></p>
            <h3>Valor:R$ 1.200</h3>
        </div>
        <div class="box">
            <h2>Modelo:</h2>
            <div class="img">
                <img src="<?php echo INCLUDE_PATH?>painel/uploads/<?php echo $servico['modelo'];?>" alt="">
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="contato-container">
    <div class="container">
        <h2>Entre em Contato</h2>
        <form action="" id="contato" method="post">
            <input type="text" name="nome" id="" placeholder="Nome...">
            <input type="email" name="email" id="" placeholder="E-mail...">
            <input type="text" name="telefone" id="" placeholder="Telefone...">
            <input type="hidden" name="indentificador" value="indentificador_contato">
            <textarea name="mensagem" id="" cols="30" rows="10" placeholder="Sua Mensagem..."></textarea>
            <input type="submit" class="bt" name="acao" value="Enviar">
        </form>
    </div>
</div>
</Section>
