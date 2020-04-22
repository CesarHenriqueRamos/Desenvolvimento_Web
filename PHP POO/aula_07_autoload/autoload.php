<?php
function Autoload($class){
    $class = str_replace('\\','/',$class);
    echo $class;
    if(file_exists('Class/'.$class.'.class.php')){
        include('Class/'.$class.'.class.php');
    }
}
spl_autoload_register('Autoload');
?>