<?php
// IMPORTACION DEL ARCHIVO AUTOLOAD
require_once('./vendor/autoload.php');

// INICIALIZACION DEL SDK DE EPAYCO
$epayco = new Epayco\Epayco(array(
  "apiKey" => "64f2b6651f5d3b1a5619e52054444bd6", //PUBLIC_KEY Cuenta epayco
  "privateKey" => "596e79b4fa7cae328408621e74dc9675", // PRIVATE_KEY Cuenta epayco
  "lenguage" => "ES", //Idioma predeterminado
  "test" => true //transacciones en modo pruebas
));

$sub = $epayco->subscriptions->cancel($_POST["idsub"]);
var_dump($sub);
?>