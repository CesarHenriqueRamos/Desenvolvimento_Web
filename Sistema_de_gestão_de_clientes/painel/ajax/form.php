<?php

include('../../constante.php');

if(Painel::logado() == false){
    die('Você não esta Logado');
}
$data['sucesso'] = true;
$data['erros'] = "Atenção: Dados Vazio não São Permitidos";
//codigo comessa aqui
$nome = $_POST['nome'];
$email = $_POST['email'];
$tipo = $_POST['tipo'];
$imagem = "";
$cpf = '';
$cnpj = '';
if($tipo == 'fisico'){
    $dado = $_POST['cpf'];
}else if($tipo == 'juridico'){
    $dado = $_POST['cnpj'];
}
if($nome == ''){
    $data['sucesso'] = false;
    $data['erros'] ;
}else if($email == ''){
    $data['sucesso'] = false;
    $data['erros'] ;
}else if($tipo == ''){
    $data['sucesso'] = false;
    $data['erros'] ;
}else if($dado == ''){
    $data['sucesso'] = false;
    $data['erros'] ;
}

if(isset($_FILES['imagem'])){
    if(Painel::imagemValida($_FILES['imagem'])){
       $imagem = $_FILES['imagem']; 
    }else{
        $imagem = "";
        $data['sucesso'] = false;
    }
    
}else{
    $data['sucesso'] = false;
    $data['erros'] = 'Imagem Invalida/Vazia';
}
if($data['sucesso']){
    //cadastrar
    if(is_array($imagem)){
        $imagem = Painel::uploadFile($imagem);
    }
    $arr = [$nome,$email,$tipo,$dado,$imagem];
    $sql = MySql::connect()->prepare("INSERT INTO `tb_admin.clientes` VALUES (null,?,?,?,?,?)");
    $sql->execute(array($nome,$email,$tipo,$dado,$imagem));
    die(json_encode($data));
}
die(json_encode($data));
?>

</script>