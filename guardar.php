<?
   include "conexion.php";
   $matricula=$_POST['matricula']; 
   $nombre=$_POST['nombre'];  
   $apaterno=$_POST['apaterno'];
   $amaterno=$_POST['amaterno']; 
   $sexo=$_POST['sexo'];   
   $edad=$_POST['edad'];
   $telefono=$_POST['telefono'];   
   $email=$_POST['email'];   
   $contrasena=$_POST['contrasena'];
   $confirma=$_POST['confirma'];   
   $tipousuario='E';
   if($dbh!=null)   
   {    
	$stmt = $dbh-> prepare("INSERT INTO usuarios (matricula, nombre, apaterno, amaterno, tipousuario, sexo, edad, telefono, email, contrasena) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $matricula);	 
    $stmt->bindParam(2, $nombre); 
    $stmt->bindParam(3, $apaterno); 	
    $stmt->bindParam(4, $amaterno); 
    $stmt->bindParam(5, $tipousuario); 
    $stmt->bindParam(6, $sexo); 
    $stmt->bindParam(7, $edad); 
    $stmt->bindParam(8, $telefono);
    $stmt->bindParam(9, $email);	
    $stmt->bindParam(10, $contrasena); 
    $stmt->execute();

    echo "El registro del alumno $nombre $apaterno $amaterno se realizó con éxito.";
    echo "<br><br><a href='index.php'><img src='atras.jpg'></a>";
    $dbh=null;
    }   else  {
    echo "No hay conexión con la base de datos."; 
    echo "<br><br><a href='index.php'><img src='atras.jpg'></a>";	
    }  
?>