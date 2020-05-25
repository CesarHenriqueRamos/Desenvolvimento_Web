<?php
$sql = MySql::connect()->prepare("SELECT * FROM `tb_site.depoimentos`");
$sql->execute();
$depoimenstos = $sql->fetchAll();
?>
<div class="box-container w100">
    <h2 class="title"><i class="far fa-list-alt"></i> Listar Depoimentos</h2>
    <hr>
    <table>
        <tr>
            <td>Nome:</td>
            <td>Depoimento:</td>
        </tr>
        <?php
        foreach($depoimenstos as $key => $value){?>
        <tr>
            <td><?php echo $value['nome'];?></td>
            <td><?php echo $value['depoimento'];?></td>
        </tr>
        <?php } ?>
        <div class="clear"></div>
    </table>
</div>