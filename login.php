<?php
   $host       ="localhost";
   $dbname     = "id16129776_progweb2";
   $user       = "id16129776_antonioenriquez";
   $password   ="zjo_%H=)I6S/s1fm";
   $contrasena=$_POST['contrasena'];
   $matricula=$_POST['matricula']; 

//Conexión a la base de datos
$conexion=mysqli_connect("localhost", $user, $password, $dbname );
$consulta="SELECT * FROM usuarios WHERE matricula='$matricula' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0){
   header("location: bienvenido.html");
}else{
   echo"Error al autenticarse";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

   //    try{
         
   //       $conn2 = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
   //       $conn2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   //       echo '<h1>Conectado a la base de datos</h1>';
     
   //   }catch(PDOException $e){
   //       echo $e->getMessage();
   //       echo '<h1>Ocurrió un errordurante la conexión';
     
   //   }

    

   //   //Código para ver todo en db
   //   $rows = $conn2 -> query("select matricula, nombre, apaterno, amaterno, tipousuario from usuarios WHERE matricula=? AND contrasena=?", $matricula, $contrasena);
   //   $result = $rows->fetchAll();
   //   while($row = $rows->fetch()){
   //       echo $row['nombre']. " ". $row['apaterno']."<br>";
   //   }




      // if($conn!=null)  //Se logró conectar: Si dbh es distinto a nulo
      // {  $stmt = $conn->prepare("SELECT matricula, nombre, apaterno, amaterno, tipousuario FROM usuarios WHERE matricula=:matricula AND contrasena=:contrasena");
      //    $stmt->bindParam(':matricula', $matricula);   
      //    $stmt->bindParam(':contrasena', $contrasena); 
      //    // Ejemplo de FetchMode por asociación (Podemos dejar el ya especificado)
      //    $stmt->setFetchMode(PDO::FETCH_ASSOC);
      //    // Ejecutar la consulta 
      //    $stmt->execute(); //Grupo de datos extraídos de ahí: Que solo es un registro
      //    $datos = $stmt->fetch(); //Contiene el primer renglón del conjunto de datos
      //    if($datos['matricula']!=NULL){    //ARREGLO INDEXADO ASOCIATIVO. Si obtuvo un registro: Si datos matricula es distinto de null
      //       // variables de sesión
      //       $_SESSION["matricula"]=$datos["matricula"];   $_SESSION["nombre"]=$datos["nombre"];  
      //       $_SESSION["apaterno"]=$datos["apaterno"];    $_SESSION["amaterno"]=$datos["amaterno"];  
      //       $_SESSION["tipousuario"]=$datos["tipousuario"];
      //       if($_SESSION["tipousuario"]=='A')   //Extrae la etiqueta de tipo de usuario
      //          $_SESSION["usuario"]="Administrador";
      //       else
      //          $_SESSION["usuario"]="Estudiante";
      //       echo "Logueo exitoso. Bienvenido ".$_SESSION["nombre"] ." ". $_SESSION["apaterno"] ." ". $_SESSION["amaterno"];
      //       echo "<br> Has iniciado sesión como ". $_SESSION["usuario"];
      //       echo "<br><br><a href='index.php'><img src='atras.jpg'></a>";
      //       //echo '<META HTTP-EQUIV="Refresh" CONTENT="1;URL=index.html">';
      //    } else { //No se obtuvo registro
      //       echo "Logueo erróneo. Identificador de usuario o contraseña incorrecta.";       
      //       echo "<br><br><a href='index.php'><img src='atras.jpg'></a>";  
      //       exit();  
      //    }
      // $conn=null;  //Termina la conexión
      // }   
      // else     //No se logró conexión
      // {
      //    echo "No hay conexión con la base de datos.";
      // }
      ?>