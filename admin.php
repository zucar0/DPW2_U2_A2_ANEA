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
    <title>Administrador</title>
</head>
<body>
    <h1>Hola administrador.</h1>
    <?php echo $_SESSION['matricula'] ?>
    <?php echo $filas['nombre'] ?>
    
</body>
</html>