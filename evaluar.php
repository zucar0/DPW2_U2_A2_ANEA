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
    <title>Evaluar</title>
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
    <h3>Registro de calificaciones</h3>
    <section class="formulario">
        <form id="form1" action="guardarCalificacion.php" method="POST">
            <div class="form-group etiquetas">
              <label for="matricula">Matrícula</label>
              <input name="matricula" type="text" id="matricula" class="form-control" value="" placeholder="Escribe la matrícula">
            </div>
            <div class="form-group etiquetas">
              <label for="prog">Programación</label>
              <input name="prog" type="text" class="form-control" id="prog" value="" placeholder="Programación">
            </div>
            <div class="form-group etiquetas">
                <label for="mate">Matemáticas</label>
                <input name="mate" type="text" class="form-control" id="mate" placeholder="Matemáticas" required>
              </div>
              <div class="form-group etiquetas">
                <label for="algo">Algoritmos</label>
                <input name="algo" type="text" class="form-control" id="algo" placeholder="Algoritmos" required>
              </div>
              <div class="form-group etiquetas">
                <label for="logi">Lógica</label>
                <input name="logi" type="text" class="form-control" id="logi" placeholder="Lógica" required>
              </div>
              <div class="form-group etiquetas">
                <label for="so">Sistemas Operativos</label>
                <input name="so" type="text" class="form-control" id="so" placeholder="Sistemas Operativos" required>
              </div>
              <div class="form-group etiquetas">
                <label for="bd">Bases de datos</label>
                <input name="bd" type="text" class="form-control" id="bd" placeholder="Bases de datos" required>
              </div>
              <button type="submit" name="enviarCalificacion" value="evaluar" class="btn btn-primary">Evaluar</button>
          </form>
    </section>
    
    
    
    <table class="tablaAdmin">
        <tr>
            <th>Matricula</th>
            <th>Programación</th>
            <th>Matemáticas</th>
            <th>Algoritmos</th>
            <th>Lógica</th>
            <th>Sistemas Operativos</th>
            <th>Bases de datos</th>
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