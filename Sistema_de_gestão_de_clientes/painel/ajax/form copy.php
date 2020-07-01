<?php

include('../../constante.php');

if(Painel::logado() == false){
    die('Você não esta Logado');
}
$data['sucesso'] = true;
$data['erros'] = "Atenção: Dados Vazio não São Permitidos";
$data['mensagem'] = "";
//codigo comessa aqui
if(isset($_POST['tipo_acao']) && $_POST['tipo_acao'] == 'cadastrar_cliente'){
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
        $data['mensagem'] = "Cliente Cadastrado Com Sucesso";
        die(json_encode($data));
    }
}else if(isset($_POST['tipo_acao']) && $_POST['tipo_acao'] == 'atualizar_cliente'){
    //estudar o codigo
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
            $data['sucesso'] = true;
        }
        
    }else{
        $data['sucesso'] = false;
        $data['erros'] = 'Imagem Invalida/Vazia';
    }
    if($data['sucesso']){
        //cadastrar
        if(is_array($imagem)){
            //$imagem = Painel::uploadFile($imagem);
        }
        //$sql = MySql::connect()->prepare("INSERT INTO `tb_admin.clientes` VALUES (null,?,?,?,?,?)");
        //$sql->execute(array($nome,$email,$tipo,$dado,$imagem));
        $data['mensagem'] = "Cadastrado Atualizado Com Sucesso";
        die(json_encode($data));
    }else if($_POST['tipo_acao'] == 'deletar_cliente'){
        $id = $_POST['id'];
        $sql = MySql::connect()->prepare("SELECT imagem FROM `tb_admin.clientes` WHERE id=?");
        $sql->execute(array($id));
        $imagem=$sql->fetch()['imagem'];
        @unlink('../uploads/'.$imagem);
        MySql::connect()->exec("DELETE FROM `tb_admin.clientes` WHERE id=$id");
        $data['mensagem'] = "Deletado Com Sucesso";
        
    }
    die(json_encode($data));
}

?>