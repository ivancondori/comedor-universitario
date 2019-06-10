<?php
    include 'seguridad.php';
	include 'cn/conectar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap/bootstrap.css">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light  shadow p-2 mb-5 rounded">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png"  class="d-inline-block align-top" width="100px"  alt="">
          v1.0
      </a>      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Archivo
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#" onclick="MComensales('lcomensales.php'); return false">Comensales</a>
              <a class="dropdown-item" href="#">Estudiantes</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Venta
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Sorteo</a>
              <a class="dropdown-item" href="#">Atención</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Reportes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Analisis de Atención</a>

            </div>
          </li>
			<!--user
          <li>
            <a class="nav-link" href="" onclick="MUsuario('lusuario.php'); return false">Usuarios</a>
          </li>-->
        </ul>

        <div class="nav-item dropdown navbar-nav">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php
              echo $_SESSION['nombre'];
            ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Acerca de</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php" action="closesession.php">
              Salir del sistema
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="container" id="resultado" ></div>




	<script src="./js/script.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.bundle.js"></script>

</body>
</html>
