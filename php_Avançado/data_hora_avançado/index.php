<?php
//alterar o formato
/*$data = DateTime::createFromFormat('d/m/Y', '27/01/1995');
echo $data->format('Y-m-d');*/
//formatando data hora
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s', strtotime('1995-01-27 12:00:00'));
?>