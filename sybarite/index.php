<?php
// require_once('suscripciones_epayco.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="main-container">
    <header class="header">

    </header>
    <section class="banner">
      <div class="img-container">
        <a href="https://sybarite.com.co/">
          <img src="https://sybarite.com.co/img/my-store-logo-1557954042.jpg" alt="sybarite">
        </a>
      </div>
    </section>
    <section class="main-section">
      Main Section
      <form action="suscripcion.php" method="post">
        <input type="text" placeholder="Nombre" name="firstname" required><br>
        <input type="text" placeholder="Apellido" name="lastname" required><br>
        <select name="doctype" required>
          <option value="Select-one" selected disabled>Tipo de documento</option>
          <option value="CC">Cédula de ciudadanía</option>
          <option value="CE">Cédula de extranjería</option>
        </select><br>
        <input type="text" placeholder="Número de documento" name="docnumber" required><br>
        <input type="email" placeholder="email" name="email" required><br>
        <input type="text" placeholder="Celular" name="cellnumber" required><br>
        <input type="text" placeholder="Teléfono" name="phonenumber" required><br>
        <input type="text" placeholder="Dirección" name="address" required><br>
        <input type="text" placeholder="Número de tarjeta de crédito" name="cardnumber" required><br>
        <input type="text" placeholder="Año de expiración AA" name="expyear" required><br>
        <input type="text" placeholder="Mes de expiración MM" name="expmonth" required><br>
        <input type="text" placeholder="CVC" name="cvc" required>
        <button type="submit">Submit</button>
      </form>
    </section>
    <footer class="footer">
      <div class="footer-container">
        <p>© 2019 Sybarité, creado en MT Agencia</p>
      </div>
    </footer>
  </div>
</body>
</html>
