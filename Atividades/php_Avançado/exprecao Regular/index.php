<?php
//expreção
//$test = 'Cesar';
//verifica se tem o conteudo
/*if(preg_match('/sar/', $test)){
    echo 'Verdade';
}*/
//preg_match('/(.*?)s(.*)/', $test, $retorno);
//print_r($retorno);
/*function validarCpf($cpf){
    $exprecao = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';
    return preg_match($exprecao,$cpf);
}
if(isset($_POST['acao'])){
    $cpf = $_POST['cpf'];
    if(validarCpf($cpf)){
        echo 'CPF valido';
    }else{
        echo 'CPF Invalido';
    }
}*/
//
$str = '<div>
        <h2>Ola Mundo</h2>
        </div>';
preg_match('/(.*)/s',$str,$ret);
echo htmlentities($ret[0]);
//para queise sensitive
//$test = 'Cesar';
//verifica se tem o conteudo
/*if(preg_match('/ce/i', $test)){
    echo 'Verdade';
}*/
?>
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="cpf" id="">
        <input type="submit" value="enviar" name="acao">
    </form>
</body>
</html>-->