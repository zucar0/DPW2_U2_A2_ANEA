<?php
    //Reanudamos la sesión
    session_start();
    //Se evita ver errores en la página
    error_reporting(0);
    $variableSesion = $_SESSION['matricula'];
    $tipoUsuario =   $_SESSION['tipousuario'];
    if($variableSesion ==null || $variableSesion ='' || $tipoUsuario == 'A'){
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
    <title>Estudiante</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body class="text-info bg-dark">
<section class="barra">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin.php">Inicio</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="estudiante.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="estudiante.php">Consultar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cerrar_sesion.php">Salir</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>
    <h1>Matrícula <?php echo $_SESSION['matricula'] ?> </h1>
    <h2>¡Bienvenido <?php echo  $_SESSION['nombre'] ?> <?php  $_SESSION['apaterno']?> <?php $_SESSION['amaterno'] ?>!</h2>  
    <h3>¡Has ingresado como  <?php echo $_SESSION['tipousuario']?>studiante!</h3>
    <br>
    <div>
        <h3 class="tituloTabla">Calificaciones</h3>
        <table class="tablaEstudiante">
            <tr>
                <td><strong>Programación</strong></td>
                <td><strong>Matemáticas</strong></td>
                <td><strong>Algoritmos</strong></td>
                <td><strong>Lógica</strong></td>
                <td><strong>Sistemas operativos</strong></td>
                <td><strong>Bases de datos</strong></td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['prog']?></td>
                <td><?php echo $_SESSION['mate']?></td>
                <td><?php echo $_SESSION['algo']?></td>
                <td><?php echo $_SESSION['logi']?></td>
                <td><?php echo $_SESSION['so']?></td>
                <td><?php echo $_SESSION['bd']?></td>
            </tr>
        </table>
    </div>
</body>
</html>