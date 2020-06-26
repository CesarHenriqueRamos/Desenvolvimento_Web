<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=test','root',''); 
    //modo de desenvolvimento
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'Logado';
 }catch(Exception $e){
     //echo $e->getMessage();
     echo 'Não pode se conectar, tente mais tarde';
 }
    if(isset($_POST['login'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $sql = $pdo->prepare("SELECT * FROM `tb_login` WHERE login=? AND senha=?");
        $sql->execute(array($login,$senha));
        if($sql->rowCount() == 1){
            echo 'Logado';
        }else{
            echo 'Erro ao Logar';
        }
    }
?>
<form action="" method="post">
    <input type="text" name="login" id="">
    <input type="password" name="senha" id="">
    <input type="submit" value="Enviar">
</form>