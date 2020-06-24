<?php
include('cache.php');
$cache = new cache();
echo $cache->readCache()->conteudo;

?>