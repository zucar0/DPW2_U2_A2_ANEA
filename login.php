<?php
   $contrasena=$_POST['contrasena'];
   $matricula=$_POST['matricula']; 
   $host       ="localhost";
   $dbname     = "id16129776_progweb2";
   $user       = "id16129776_antonioenriquez";
   $password   ="zjo_%H=)I6S/s1fm";
   session_start();
   //Se crea variable de sesión
   $_SESSION['matricula'] = $matricula;
   //Conexión a la base de datos
   $conexion=mysqli_connect("localhost", $user, $password, $dbname );
   $consulta="SELECT * FROM usuarios WHERE matricula='$matricula' and contrasena='$contrasena'";
   $consultaCalificaciones="SELECT * FROM calificaciones WHERE matricula='$matricula'";
   $resultado=mysqli_query($conexion, $consulta);
   $resultadoCalificaciones=mysqli_query($conexion, $consultaCalificaciones);
   //Aquí se almacena el resultado de la consulta
   $filas=mysqli_fetch_array($resultado);
   $_SESSION['nombre'] = $filas['nombre'];
   $_SESSION['apaterno'] = $filas['apaterno'];
   $_SESSION['amaterno'] = $filas['amaterno'];
   $_SESSION['tipousuario'] = $filas['tipousuario'];
   $_SESSION['inicio'] =$filas['tipousuario'];
   $filasCalificaciones=mysqli_fetch_array($resultadoCalificaciones);
   $_SESSION['prog']=$filasCalificaciones['prog'];
   $_SESSION['mate']=$filasCalificaciones['mate'];
   $_SESSION['algo']=$filasCalificaciones['algo'];
   $_SESSION['logi']=$filasCalificaciones['logi'];
   $_SESSION['so']=$filasCalificaciones['so'];
   $_SESSION['bd']=$filasCalificaciones['bd'];
   //Con el array vamos a identificar el Rol de Estudiante o Admin
   
   //Administrador
   if($_SESSION['inicio']=="A"){
      header("Location:admin.php");
      // header("location: bienvenido.html");
   }else if($_SESSION['inicio']=="E"){
      header("Location:estudiante.php");
   }
   else{
      echo"Error al autenticarse";
   }
   mysqli_free_result($resultado);
   mysqli_close($conexion);
?>