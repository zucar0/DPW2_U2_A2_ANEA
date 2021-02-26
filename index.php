<? session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNADM</title>
</head>
<body>

    <h1>Universidad Abierta y a Distancia de México</h1>
    <?
        //Recuperamos las variables de sesión
        $matricula=$_SESION["matricula"];
        $nombre=$_SESION["nombre"];
        $apaterno=$_SESION["apaterno"];
        $amaterno=$_SESION["amaterno"];
        $tipousuario=$_SESION["tipousuario"];
        $usuario=$_SESION["usuario"];
    ?>
    <div>
        <h2>Bienvenido <?echo $nombre." ".$apaterno." ".$amaterno ?></h2>
        <h3>Has iniciado sesión como <? echo $usuario ?></h3>
    </div>
</body>
</html>