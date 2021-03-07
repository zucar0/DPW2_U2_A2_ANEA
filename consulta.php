<?php
    //Reanudamos la sesión
    session_start();
    //Se evita ver errores en la página
    error_reporting(0);
    $variableSesion = $_SESSION['matricula'];
    if($variableSesion ==null || $variableSesion =''){
        echo 'No tiene autorización para ingresar';
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas calificaciones</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body class="text-info bg-dark">
<section class="barra">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="estudiante.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="consultar.php">Consultar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cerrar_sesion.php">Salir</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>
    <h2>Matrícula: <?php echo $_SESSION['matricula'] ?> </h2>
    <h2>Nombre: <?php echo  $_SESSION['nombre'] ?> <?php  $_SESSION['apaterno']?> <?php $_SESSION['amaterno'] ?>!</h2>  
    <h3>Tus calificaciones son: </h3>
    <p><?php echo $_SESSION['prog'] ?></p>
</body>
</html>