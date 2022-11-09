<?php
// si inicia sesion//
  session_start();

  if(!isset($_SESSION['usuario'])){
    echo '
      <script>
        alert("Debe iniciar sesion"); 
        window.location ="../index.php";       
      </script>    
    ';    
    session_destroy();
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pokemon</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="title">pokemon</h1>
    <a href="controll/cerrar_sesion.php">cerrar sesion</a>
    <div class="pokemon-container">
    <!-- <a class="pokemon-container" href="pokemon.php" target="_blank"></a> -->

    </div>
    <nav class="pagination" aria-label="">
      
        <ul class="pagination">
          <li class="page-item" id="previous">
            <a class="page-link" href="#" tabindex="-1">Anterior</a>
          </li>
          <li class="page-item" id="next">
            <a class="page-link" href="#">Siguiente</a>
          </li>
        </ul>
      </nav>
    <div id="spinner" class="spinner-border text-light" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    <script src="controll/js/main.js"></script>
</body>
</html>