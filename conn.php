<?php

try{
    $host       ="localhost";
    $dbname     = "id16129776_progweb2";
    $user       = "id16129776_antonioenriquez";
    $password   ="zjo_%H=)I6S/s1fm";

    $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo '<h1>Conectado a la base de datos</h1>';

}catch(PDOException $e){
    echo $e->getMessage();
    echo '<h1>Ocurrió un error durante la conexión';

}
//Código para ver todo en db
// $rows = $conn -> query("select nombre from usuarios");
// while($row = $rows->fetch()){
//     echo $row['nombre']."<br>";
// }

//INSERT INTO `usuarios` (`matricula`, `nombre`, `apaterno`, `amaterno`, `tipousuario`, `sexo`, `edad`, `telefono`, `email`, `contrasena`) VALUES ('PRUEBA01', 'Antonio', 'Enriquez', 'Alvarado', 'E', 'M', '33', '5579134671', 'enriquez_alvarado@nube.unadmexico.mx', 'holamundo123'), ('PRUEBA02', 'jUANITO', 'Perez', 'Lara', 'E', 'M', '40', '123456789', 'mail@mail.com', '123456jajaja');

?>