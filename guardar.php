<?php
   include "conn.php";
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

   try{
    $stmt = $conn->prepare("INSERT INTO usuarios VALUES(:matricula, :nombre, :apaterno, :amaterno, :tipousuario, :sexo, :edad, :telefono, :email, :contrasena)");
    $stmt->bindValue(':matricula', $matricula);
    $stmt->bindValue(':nombre', $nombre);
    $stmt->bindValue(':apaterno', $apaterno);
    $stmt->bindValue(':amaterno', $amaterno);
    $stmt->bindValue(':tipousuario', $tipousuario);
    $stmt->bindValue(':sexo', $sexo);
    $stmt->bindValue(':edad', $edad);
    $stmt->bindValue(':telefono', $telefono);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':contrasena', $contrasena);

    $stmt->execute();
    echo "El registro del alumno $nombre $apaterno $amaterno se realizó con éxito.";
    echo "<br><br><a href='index.php'>*** Regresar al inicio ***</a>";
    $conn = null;
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    
?>