<?php
require 'vendor/autoload.php';

//use Carbon\Carbon;printf("Now: %s", Carbon::now());
use FlyingLuscas\Correios\Client;
use FlyingLuscas\Correios\Service;
$correios = new Client;
$loja = '76870-402';
$cliente = '76870-402';

echo '<pre>';
//print_r($correios->zipcode()->find('76870-402'));
print_r($correios->freight()
->origin($loja)
->destination($cliente)
->services(Service::SEDEX, Service::PAC)
->item(16, 16, 16, .3, 1) // largura, altura, comprimento, peso e quantidade
->calculate());
echo '</pre>';
?>