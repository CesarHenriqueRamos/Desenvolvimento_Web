<?php
//tipos de criptografia
//md5,sha1,crypt
$login = 'Cesar';
$senha = md5('Cesar');
if(@$_POST['login']){
    if($_POST['login'] === $login && md5($_POST['senha']) === $senha){
        echo 'logado com Sucesso';     
    }else{
        echo 'Falhou';
    }
}
?>
<form action="" method="post">
    <input type="text" name="login" id="">
    <input type="password" name="senha" id="">
    <input type="submit" value="Enviar">
</form>