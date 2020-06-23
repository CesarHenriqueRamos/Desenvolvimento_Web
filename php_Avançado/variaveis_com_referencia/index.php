<?php
/*$nome = 'Cesar';
function teste(&$nome){
    $nome = 'Henrique';
}
teste($nome);
echo $nome;*/
/*$nome = 'Cesar';
$teste = &$nome;
echo $teste;
echo '<br>';
echo $nome;
echo '<br>';
$teste = 'Henrique';
echo $teste;
echo '<br>';
echo $nome;*/

//operador Ternario
/*$nome = "Cesar";
$mensagem = 'Ola '.(isset($nome)? $nome: 'Visitante');
echo $mensagem;*/
//null coalescing operator
/*$valor = $_POST['acao'] ?? $_POST['opcao'] ?? 'Nada Deu Certo :(';
echo $valor;*/
//Nullable types
function teste() :?string{
    return 9;
}
$numero = teste();
var_dump($numero);
?>