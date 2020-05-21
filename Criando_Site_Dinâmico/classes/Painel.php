<?php
class Painel{
    public static function logado(){
        return isset($_SESSION['login'])? true : false;
    }
    public static function logout(){
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
    

    
}
?>