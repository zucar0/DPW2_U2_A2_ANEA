<?php
   include "conn.php";
   $matricula=$_POST['matricula']; 
   $prog=$_POST['prog'];  
   $mate=$_POST['mate'];
   $algo=$_POST['algo'];
   $logi=$_POST['logi'];
   $so=$_POST['so'];
   $bd=$_POST['bd']; 

   if(isset($_POST['enviarCalificacion'])){
        if(empty($matricula)){
            echo"<p class='error'> *** Matrícula es un campo obligatorio y no puede estar vacío *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";
        }
        if(empty($prog)){
            echo"<p class='error'> *** La calificación de Programación es obligatoria *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";

        }
        if(empty($mate)){
            echo"<p class='error'> *** La calificación de Matemáticas es obligatoria *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";

        }
        if(empty($algo)){
            echo"<p class='error'> *** La calificación de Algoritmos es obligatoria *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";

        }
        if(empty($logi)){
            echo"<p class='error'> *** La calificación de Lógica es obligatoria  *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";

        }
        if(empty($so)){
            echo"<p class='error'> *** La calificación de Sistemas Operativos es obligatoria  *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";

        }
        if(empty($bd)){
            echo"<p class='error'> *** La calificación de Bases de datos es obligatoria  *** </p>";
            // echo "<br><br><a href='registro.html'>*** Regresar al registro ***</a><br><br>";
        }
    }   

    if(  $prog >0 && $prog < 11 && $mate >0 && $mate < 11 && $algo >0 && $algo< 11 && $logi >0 && $logi< 11 && $so >0 && $so< 11 && $bd >0 && $bd < 11 ){
        try{
            $stmt = $conn->prepare("UPDATE calificaciones SET prog=:prog, mate=:mate, algo=:algo, logi=:logi, so=:so, bd=:bd WHERE calificaciones.matricula=:matricula");
            // UPDATE `calificaciones` SET `prog` = '9', `mate` = '9', `algo` = '9', `logi` = '10', `so` = '10', `bd` = '7' WHERE `calificaciones`.`matricula` = '87956469';

            $stmt->bindValue(':matricula', $matricula);
            $stmt->bindValue(':prog', $prog);
            $stmt->bindValue(':mate', $mate);
            $stmt->bindValue(':algo', $algo);
            $stmt->bindValue(':logi', $logi);
            $stmt->bindValue(':so', $so);
            $stmt->bindValue(':bd', $bd);
        
            $stmt->execute();
            echo "El registro de las calificaciones para el alumno con matricula $matricula se realizó con éxito.";
            echo "<br><br><a href='admin.php'>*** Regresar al inicio ***</a>";
            $conn = null;
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
            echo "*** Ocurrió un error; valida los datos que estás ingresando ***";
        }
    }else{
        echo "Ocurrió un error.  Verifica que las calificaciones ingresadas están en un rango de 0 a 10";
        echo "<br><br><a href='evaluar.php'>***  Vuelve a intentarlo ***</a>";
    }
?>