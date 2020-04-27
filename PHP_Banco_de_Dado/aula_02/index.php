<?php
date_default_timezone_set('America/Sao_Paulo');
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
//delete
    /*$id = 11;  
    $sql = $pdo->prepare('DELETE FROM `clientes` WHERE id=?');
    $sql->execute(array($id));
    echo 'Deletado com sucesso';*/
//select
    //para todos os elemntos
    //$sql = $pdo->prepare("SELECT * FROM `posts`");
    //$sql->execute();

    //para um id especifico
    //$sql = $pdo->prepare("SELECT * FROM `posts` WHERE categoria_id = ?");
    // $sql->execute(array($_GET['categoria']));

    //inner Join
    $sql = $pdo->prepare("SELECT *,`posts`.`id` as `post_id` FROM `posts` INNER JOIN `categoria` ON `posts`.`categoria_id` = `categoria`.`id`");
    $sql->execute();

   
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    /*foreach($dados as $key => $value){
        echo 'Titulo:'.$value['titulo'];
        echo '<br>';
        echo 'Post:'.$value['conteudo'];
        echo '<br>';
        echo 'Categoria do Poste ID:'.$value['categoria_id'];
        echo '<hr>';
    }*/
    echo '<pre>';
    print_r($dados);
    echo '</pre>';
?>