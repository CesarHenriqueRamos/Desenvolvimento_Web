<?php
class Painel{
    public static $cargo = [
        '0' => 'Normal',
        '1' => 'SubAdministrador',
        '2' => 'Administrador'
    ];
    public static function logado(){
        return isset($_SESSION['login'])? true : false;
    }
    public static function logout(){
        setcookie('lembrar','true',time()-1,'/');
        session_destroy();
        header('Location: '.INCLUDE_PATH_PAINEL);
        die();
    }
    public static function carregarPagine(){
        if(isset($_GET['url'])){
            $url = explode('/',$_GET['url']);
            if(file_exists('pages/'.$url[0].'.php')){
                include('pages/'.$url[0].'.php');
            }else{
                //quando a pagina não existe
                header('Location: '.INCLUDE_PATH_PAINEL);
                die();
            }
        }else{
            include('pages/home.php');
        }
    }
    public static function alert($tipe,$mesagem){
        if($tipe == 'sucesso'){
            echo '<div class="sucesso"><i class="fas fa-check"></i> '.$mesagem.'</div>';
        }else if($tipe == 'erro'){
            echo '<div class="err"> <i class="fas fa-times"></i> '.$mesagem.'</div>';
        }
    }
    public static function imagemValida($imagem){
        if($imagem['type'] == 'image/jpeg' || $imagem['type'] == 'image/jpg' || $imagem['type'] == 'image/png'){
            $tamanho = intval($imagem['size']/1024);
            if($tamanho < 300){
                return true;
            }else{
                return false;
            }            
        }else{
            return false;
        }
    }
   
    public static function uploadFile($file){
        $formatoArquivo = explode('.',$file['name']);
        $imagemNome = uniqid().'.'.$formatoArquivo[count($formatoArquivo) - 1];
        if(move_uploaded_file($file['tmp_name'],BASE_DIR_PAINEL.'/uploads/'.$imagemNome)){
            return $imagemNome;
        }else{
            return false;
        }
     }
    public static function deleteFile($file){
        @unlink('uploads/'.$file);
    }
    //validar se o osuario existe
   public static function userExist($user){
       $sql = MySql::connect()->prepare("SELECT `id` FROM `tb_admin.usuarios` WHERE user = ?");
       $sql->execute(array($user));
       if($sql->rowCount() == 1){
           return true;
       }else{
           return false;
       }
   }
   public static function addUser($user,$senha,$imagem,$nome,$cargo){
    $sql = MySql::connect()->prepare("INSERT INTO `tb_admin.usuarios` VALUES(null,?,?,?,?,?)");
    $sql->execute(array($user,$senha,$imagem,$nome,$cargo));
   }

    
}
?>