<?php
    //Reanudamos la sesión
    session_start();
    //Se evita ver errores en la página
    error_reporting(0);
    $variableSesion = $_SESSION['matricula'];
    $tipoUsuario =   $_SESSION['tipousuario'];
    if($variableSesion ==null || $variableSesion ='' || $tipoUsuario == 'E'){
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
    <title>Calificaciones</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

 </head>
<body>
    <section class="barra">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a href="/index.html" class="navbar-brand"><img src="/assets/logoUnADM.png" width="15%" alt="UNADM"></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="margin-right: 35%;" id="navbarCollapse">
              <div class="navbar-nav">
                  <a href="admin.php" class="nav-item nav-link fs-2">Inicio</a>
                  <a href="evaluar.php" class="nav-item nav-link fs-2">Evaluar</a>
                  <a href="consultar.php" class="nav-item nav-link active fs-2">Consultar</a>
                  <a href="cerrar_sesion.php" class="nav-item nav-link fs-2">Salir</a>
              </div>
            </div>

<!-- 
            <div class="container-fluid">
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="evaluar.php">Evaluar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="consultar.php">Consultar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cerrar_sesion.php">Salir</a>
                  </li>
                </ul>
              </div>
            </div> -->
          </nav>
    </section>
<section class="calificaciones">
    <table class="tablaAdmin">
        <tr>
            <th>Matricula</th>
            <th>Prog</th>
            <th>Mate</th>
            <th>Algo</th>
            <th>Lógi</th>
            <th>SO</th>
            <th>BD</th>
        </tr>
        <?php
            $contrasena=$_POST['contrasena'];
            $matricula=$_POST['matricula']; 
            $host       ="localhost";
            $dbname     = "id16129776_progweb2";
            $user       = "id16129776_antonioenriquez";
            $password   ="zjo_%H=)I6S/s1fm";
            //Conexión a la base de datos
            $conexionAdm=mysqli_connect("localhost", $user, $password, $dbname );
            $consultaAdm="SELECT * FROM calificaciones";
            $resultadoAdm=mysqli_query($conexionAdm, $consultaAdm);   
            while($mostrar=mysqli_fetch_array($resultadoAdm)){
        ?>
            <tr>
                <td><?php echo $mostrar['matricula']?></td>
                <td><?php echo $mostrar['prog']?></td>
                <td><?php echo $mostrar['mate']?></td>
                <td><?php echo $mostrar['algo']?></td>
                <td><?php echo $mostrar['logi']?></td>
                <td><?php echo $mostrar['so']?></td>
                <td><?php echo $mostrar['bd']?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
</html>