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

// CREACION DE PLANES
// $plan = $epayco->plan->create(array(
//   "id_plan" => "suscripcion_aventura_en_el_vino",
//   "name" => "Aventura en el vino",
//   "description" => "Aventúrate a probar nuevos vinos, no te quedes en la marca y cepa conocidas. Sybarité te deja en tu casa cada mes una caja aventura con 3 vinos diferentes. Cada vino viene con un colgante con las recomendaciones para que puedas disfrutar los nuevos sabores y propuestas.",
//   "amount" => 180000,
//   "currency" => "cop",
//   "interval" => "month",
//   "interval_count" => 1,
//   "trial_days" => 0,
// ));

// var_dump ('MIPLANES->->->->->->->->->->->->->->->->->->->->->',$plan);

//OBTENER UN PLAN ESPECÍFICO
// $plan1 = $epayco->plan->get("suscripcion_aventura_en_el_vino");
// var_dump('MI PLAN CREADO ANTERIORMENTE=:=:=:=:=:=:=:=:=:=:=:=:=:=:=:=',$plan1);

//LISTAR LOS PLANES CREADOS PARA LA CUENTA
// $mis_planes = $epayco->plan->getlist();
// var_dump ('Mis planes creados::::::',$mis_planes,'<br><br><br>');

//CREACIÓN DE TOKEN
$cardnumber = $_POST["cardnumber"];
$cardyear = $_POST["expyear"];
$cardmonth = $_POST["expmonth"];
$cardcvc = $_POST["cvc"];

var_dump($cardnumber, $cardyear, $cardmonth, $cardcvc,'<br><br><br>');

$token = $epayco->token->create(array(
  "card[number]" => "4575623182290326",
  "card[exp_year]" => "2018",
  "card[exp_month]" => "12",
  "card[cvc]" => "123",
));

var_dump('Se crea el token::::::',$token,'<br><br><br>');

//CREACIÓN DE LOS DATOS DEL CLIENTE QUE SERÁN USADOS
// $name = 'Fulanito';
// $lastname = 'De Tal';
// $doc_type = 'CC';
// $doc_number = '1123457900';
// $email = 'fulanitodetal@correoelectroni.co';
// $cellphone = '3233232330';
// $phone = '2475638';
// $address = 'Cra 30 # 31-30';
// $full_name = $name . " " . $lastname;

//CREACIÓN DEL CUSTOMER
// $customer = $epayco->customer->create(array(
//   "token_card" => 'BsvdiAEzyg9mDtXrr',
//   "name" => $full_name,
//   "email" => $email,
//   "phone" => $cellphone,
//   "default" => true,
// ));

// var_dump('Se crea el customer::::::::::::::', $customer, '<br><br><br>');

//CREACIÓN DE LA SUSCRIPCIÓN
// $sub = $epayco->subscriptions->create(array(
//   "id_plan" => 'suscripcion_aventura_en_el_vino',
//   "customer" => 'tpryJjiGrzB8Mkzfx',
//   "token_card" => 'BsvdiAEzyg9mDtXrr',
//   "doc_type" => 'CC',
//   "doc_number" => $doc_number,
// ));

// var_dump('Se crea la suscripción::::::::::::::::::', $sub, '<br><br><br>');

//COBRO DE LA SUSCRIPCIÓN CREADA
// $paysub = $epayco->subscriptions->charge(array(
//   "id_plan" => 'suscripcion_aventura_en_el_vino',
//   "customer" => 'tpryJjiGrzB8Mkzfx',
//   "token_card" => 'BsvdiAEzyg9mDtXrr',
//   "doc_type" => "CC",
//   "doc_number" => $doc_number,
//   "address" => $address,
//   "phone" => $phone,
//   "cell_phone" => $cellphone,
// ));

// var_dump("Se cobró la suscripción::::::::::::::::",$paysub,'<br><br><br>');

// $sub = $epayco->subscriptions->cancel("id_subscription");