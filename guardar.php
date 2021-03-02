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
   $error_encontrado="";
// $strongPassword = preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$%^&]).*$/');
    $regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$%^&]).*$/"


   function validar_clave($contrasena,&$error_clave){
    if(strlen($contrasena) < 8){
       $error_clave = "La contraseña debe tener al menos 8 caracteres";
       return false;
    }
    if(strlen($contrasena) > 15){
       $error_clave = "La contraseña no puede tener más de 15 caracteres";
       return false;
    }
    if (!preg_match('`[a-z]`',$contrasena)){
       $error_clave = "La contraseña debe tener al menos una letra minúscula";
       return false;
    }
    if (!preg_match('`[A-Z]`',$contrasena)){
       $error_clave = "La contraseña debe tener al menos una letra mayúscula";
       return false;
    }
    if (!preg_match('`[0-9]`',$contrasena)){
       $error_clave = "La contraseña debe tener al menos un caracter numérico";
       return false;
    }
    // if (!preg_match($regex, $contrasena)){
    //     $error_clave = "La contraseña debe tener al menos un caracter especial";

    //     return false;
    // }
    $error_clave = "";
    return true;
 }

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
       if(validar_clave($_POST["contrasena"], $error_encontrado)){
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
            echo "Contraseña no válida: " . $error_encontrado .". La contraseña debe tener al menos 8 caracteres, letras, números y por lo menos un caracter especial (#,$,-,_,&,%).";
            echo "<br><br><a href='registro.html'>*** Vuelve a intentarlo con una contraseña válida ***</a>";

       }      
   }else{
        echo "El campo de contraseña y la confirmación de la contraseña no coinciden";
        echo "<br><br><a href='registro.html'>*** Vuelve a intentarlo ***</a>";
   }
?>