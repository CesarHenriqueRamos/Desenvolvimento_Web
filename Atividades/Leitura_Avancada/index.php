<?php
//<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
//ler arquivo xml
 /*$xml = simplexml_load_file('conteudo.xml');
 echo '<pre>';
 print_r($xml);
 echo '</pre>';*/
 //escrever arquivo xml apartir de um array
/* escreverXML(array('Cesar Henrique Ramos'=>'nome',25=>'idade','Programador'=>'proficao'),'arquivo.xml');
 function escreverXML($arr,$nomeDoArquivo){
    $xml = new SimpleXmlElement('<root/>');
    array_walk_recursive($arr,array($xml, 'addChild'));
    file_put_contents($nomeDoArquivo, $xml->asXML());
 }*/
/*$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
//decodificamos o json
 $obj = json_decode($json);
 $arr = json_decode($json,true);
 //echo $obj->a;
 echo $arr['b'];
 //criando json
 $arr = ['nome'=>'Cesar','cidade'=>'Blumenau'];
 $json = json_encode($arr);
 echo $json;*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script>
$(function(){
    //comunicação com Json
    $.ajax({
        url:'request.php',
        dataType:'json'
    }).done(function(data){

        console.log(data.nome);
    })
})
</script>
</body>
</html>