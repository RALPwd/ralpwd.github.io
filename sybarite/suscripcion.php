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

//CREACIÓN DE TOKEN

$token = $epayco->token->create(array(
  "card[number]" => $_POST["cardnumber"],
  "card[exp_year]" => $_POST["expyear"],
  "card[exp_month]" => $_POST["expmonth"],
  "card[cvc]" => $_POST["cvc"],
));

var_dump('Se crea el token::::::',$token,'<br><br><br>');

//CAPTURA DE DATOS DE CLIENTE

  $name = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $doc_type = $_POST["doctype"];
  $doc_number = $_POST["docnumber"];
  $email = $_POST["email"];
  $cellphone = $_POST["cellnumber"];
  $phone = $_POST["phonenumber"];
  $address = $_POST["address"];
  $full_name = $name . " " . $lastname;


  $idcard = $token->id;

//CREACIÓN DE CLIENTE

  $customer = $epayco->customer->create(array(
    "token_card" => $idcard,
    "name" => $full_name,
    "email" => $email,
    "phone" => $cellphone,
    "default" => true,
  ));

  var_dump("customer creado::::::::::",$customer,'<br><br><br>');

  $idcustomer = $customer->data->customerId;

//CREACIÓN DE SUSCRIPCIÓN

  $sub = $epayco->subscriptions->create(array(
    "id_plan" => 'suscripcion_aventura_en_el_vino',
    "customer" => $idcustomer,
    "token_card" => $idcard,
    "doc_type" => $doc_type,
    "doc_number" => $doc_number,
  ));

//PAGO DE SUSCRIPCIÓN

  $paysub = $epayco->subscriptions->charge(array(
    "id_plan" => 'suscripcion_aventura_en_el_vino',
    "customer" => $idcustomer,
    "token_card" => $idcard,
    "doc_type" => $doc_type,
    "doc_number" => $doc_number,
    "address" => $address,
    "phone" => $phone,
    "cell_phone" => $cellphone,
  ));
  
  var_dump('Suscripción:::::::::', $sub, '<br><br><br>');
  var_dump('Pago:::::::::', $paysub)

?>
  <!-- Su nombre es <?php echo $name." ".$lastname ?><br>
  Su documento es de tipo <?php echo $doc_type ?><br>
  Su número de documento es <?php echo $doc_number ?><br>
  Su email es <?php echo $email ?><br>
  Su número de celular es <?php echo $cellphone ?><br>
  Su número de teléfono es <?php echo $phone ?><br>
  Su dirección es <?php echo $address ?><br>
  Su cardnumber es <?php echo strval($_POST["cardnumber"]) ?><br>
  Su año de expiracion es <?php echo strval($_POST["expyear"]) ?><br>
  Su mes de expiracion es <?php echo strval($_POST["expmonth"]) ?><br>
  Su CVC es <?php echo strval($_POST["cvc"]) ?><br>
  Su idcard es <?php echo $idcard ?>
  Su idcustomer es <?php echo $idcustomer ?> -->
