<?php
/*if(file_exists('file.txt')){
    echo 'o arquivo existe<br>';
}else{
    //para quebrar linha \r\n
    $conteiner = "Novo Arquivo \r\n outra linha\r\noutra linha";
    //para escrever um arquivo
    file_put_contents('file.txt',$conteiner);
} 
//para ler um arquivo    
$conteudo = file_get_contents('file.txt');
echo nl2br($conteudo);
//função para deletear arquivos
//unlink('file.txt');
*/
//criar pasta
//mkdir('pasta');
//validar pasta
/*if(is_dir('pasta')){
    echo 'é uma pasta valida';
}*/
//deletar a pasta
//rmdir('pasta');
//ler os arquivos da pasta
if($handle = opendir('pasta')){
    //loop
    while(false != ($file = readdir($handle))){
        echo $file;
        echo '<br>';
    }
    closedir($handle);
}
?>