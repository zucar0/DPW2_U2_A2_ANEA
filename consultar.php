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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <section class="barra">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
            </div>
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
</body>
</html>