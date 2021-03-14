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
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light fixed-top">
      <a href="/index.html" class="navbar-brand"><img src="/assets/logoUnADM.png" width="15%" alt="UNADM"></a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" style="margin-right: 35%;" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="estudiante.php" class="nav-item nav-link active fs-2">Inicio</a>
            <a href="estudiante.php" class="nav-item nav-link active fs-2">Consultar</a>
            <a href="cerrar_sesion.php" class="nav-item nav-link fs-2">Salir</a>
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
                <td><strong>Prog</strong></td>
                <td><strong>Mate</strong></td>
                <td><strong>Algo</strong></td>
                <td><strong>Lógi</strong></td>
                <td><strong>SO</strong></td>
                <td><strong>BD</strong></td>
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