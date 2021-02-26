<? session_start();
if(!isset($_SESSION["tipousuario"]))
{
    echo "No has iniciado sesión. Da click en el enlace de abajo."
    echo "<br><br><a href='index.php'><img src='atras.jpg'></a>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
</head>
<body>
    <?
    //Caso Administrador
    if($tipousuario=="A"){
        $stmt = $dbh-> prepare("SELECT * FROM calificaciones"); 
        //Ejecutar la consola
        $stmt-> execute();
        while($resultado = $stmt-> fetch()){

        }
    }else{
            //Caso Estudiante
        $stmt = $dbh-> prepare("SELECT * FROM calificaciones WHERE matricula=:matricula");
        //BIND
        $stmt->bindParam(':matricula', $matricula);
        //Especificamos el fetch mode antes de llamar a fecth()
        $stmt-> setFetchMode(PDO::FETCH_ASSOC);
        //Ejecutar la consulta
        $stmt->execute();
        $datos=$stmt->fecth();
    }
    ?>
</body>
</html>