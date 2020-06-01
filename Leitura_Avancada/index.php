<?php
//ler arquivo xml
 /*$xml = simplexml_load_file('conteudo.xml');
 echo '<pre>';
 print_r($xml);
 echo '</pre>';*/
 //escrever arquivo xml apartir de um array
 escreverXML(array('Cesar Henrique Ramos'=>'nome',25=>'idade','Programador'=>'proficao'),'arquivo.xml');
 function escreverXML($arr,$nomeDoArquivo){
    $xml = new SimpleXmlElement('<root/>');
    array_walk_recursive($arr,array($xml, 'addChild'));
    file_put_contents($nomeDoArquivo, $xml->asXML());
 }
 
?>