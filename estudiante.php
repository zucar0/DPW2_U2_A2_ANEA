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
    $host       ="localhost";
    $dbname     = "id16129776_progweb2";
    $user       = "id16129776_antonioenriquez";
    $password   ="zjo_%H=)I6S/s1fm";
    //Conexión a la base de datos
   $conexionE=mysqli_connect("localhost", $user, $password, $dbname );
   $consultaE="SELECT * FROM usuarios WHERE matricula='$variableSesion'";
   $resultadoE=mysqli_query($conexionE, $consultaE);
   $filasE=mysqli_fetch_array($resultadoE);
   $nombreE = $filasE['nombre'];
   $apaternoE = $filasE['apaterno'];
   $amaternoE = $filasE['amaterno'];
   $tipousuarioE = $filasE['tipousuario'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
</head>
<body>
    <h1>Matrícula <?php echo $_SESSION['matricula'] ?> </h1>
    <h2>¡Bienvenido <?php echo  $_SESSION['nombre'] ?> <?php  $_SESSION['apaterno']?> <?php $_SESSION['amaterno'] ?>!</h2>  
    <h3>¡Has ingresado como  <?php echo $_SESSION['tipousuario']?>studiante.</h3>
</body>
</html>