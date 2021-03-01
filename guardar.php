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
   if(isset($_POST['enviar'])){
        if(empty($matricula)){
            echo"<p class='error'> *** Matrícula es un campo obligatorio y no puede estar vacío *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";
        }
        if(empty($nombre)){
            echo"<p class='error'> *** Agrega tu nombre *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";

        }
        if(empty($apaterno)){
            echo"<p class='error'> *** Agrega tu apellido paterno *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";

        }
        if(empty($amaterno)){
            echo"<p class='error'> *** Agrega tu apellido materno *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";

        }
        if(empty($sexo)){
            echo"<p class='error'> *** Agrega tu sexo *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";

        }
        if(empty($edad)){
            echo"<p class='error'> *** Agrega tu edad *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";

        }
        if(empty($telefono)){
            echo"<p class='error'> *** Agrega tu teléfono *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";

        }
        if(empty($email)){
            echo"<p class='error'> *** Agrega tu email *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";

        }
        if(empty($contrasena)){
            echo"<p class='error'> *** Agrega tu contraseña *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";

        }
        if(empty($confirma)){
            echo"<p class='error'> *** Agrega tu confirmación de contraseña *** </p><br><br>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";
        }
    }   

   if($_POST["contrasena"] === $_POST["confirma"] ){
       if(!empty($_POST['$nombre']) || !empty($_POST['$matricula'])  || !empty($_POST['$apaterno']) ||  !empty($_POST['$amaterno']) ||  !empty($_POST['$tipousuario']) ||
          !empty($_POST['$sexo']) || !empty($_POST['$edad']) ||  !empty($_POST['$telefono']) ||  !empty($_POST['$email']) ||  !empty($_POST['$contrasena']) ){
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
                echo "<br><br><a href='index.html'>*** Regresar al inicio ***</a>";
                $conn = null;
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
                echo "*** Ocurrió un error; valida los datos que estás ingresando ***";
            }
       }else{
            echo "<br><br><a href='registro.html'>*** Verifica los datos que intenstaste ingresar y vuelve a intentar tu registro ***</a>";
       }
       
   }else{
        echo "El campo de contraseña y la confirmación de la contraseña no coinciden";
        echo "<br><br><a href='registro.html'>*** Vuelve a intentarlo ***</a>";
   }
?>