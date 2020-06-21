<?php
//formulario $_GET
/*if($_GET['acao']){
    $nome = $_GET['nome'];
    echo $nome;
}*/
//formulario $_POST
if(isset($_POST['acao'])){
    $nome = @$_POST['nome'];
    echo $nome;
}
?>
<form action="" method="post">
<h2>Form Post</h2>
    <input type="text" name="nome">
    <input type="submit" name="acao" value="enviar">
</form>
<!--<form action="" method="get">
<h2>Form Get</h2>
    <input type="text" name="nome">
    <input type="submit" name="acao" value="enviar">
</form>-->