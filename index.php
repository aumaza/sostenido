<?php 	session_start();

      	error_reporting(E_ALL ^ E_NOTICE);
      	ini_set('display_errors', 1);

		include "connection/connection.php";
		include "core/lib/lib_system.php";



?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Sostenido</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php skeleton(); ?>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Sostenido</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="regestry/regestry.php"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Registrarse</a></li>
      <li><a href="password/password.php"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Olvidé mi Password</a></li>
    </ul>
  </div>
</nav>

<div class="container" style="margin-top:50px"><br>
  <?php

  if($conn){
    formLogIn();
}else{
    flyerConnFailure();
}

  ?>

<script type="text/javascript" src="login.js"></script>

</body>
</html>
