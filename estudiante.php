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
    <title>Estudiante</title>
</head>
<body>
    <h1>Matrícula <?php echo $_SESSION['matricula'] ?> </h1>
    <h2>¡Bienvenido <?php echo  $_SESSION['nombre'] ?> <?php  $_SESSION['apaterno']?> <?php $_SESSION['amaterno'] ?>!</h2>  
    <h3>¡Has ingresado como  <?php echo $_SESSION['tipousuario']?>studiante.</h3>
</body>
</html>