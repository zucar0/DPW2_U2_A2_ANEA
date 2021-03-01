<?php
    if(isset($_POST['submit'])){
        if(empty($matricula)){
            echo"<p class='error'> *** Agrega tu matrícula *** </p>";
        }
        if(empty($nombre)){
            echo"<p class='error'> *** Agrega tu nombre *** </p>";
        }
        if(empty($apaterno)){
            echo"<p class='error'> *** Agrega tu apellido paterno *** </p>";
        }
        if(empty($amaterno)){
            echo"<p class='error'> *** Agrega tu apellido materno *** </p>";
        }
        if(empty($sexo)){
            echo"<p class='error'> *** Agrega tu sexo *** </p>";
        }
        if(empty($edad)){
            echo"<p class='error'> *** Agrega tu edad *** </p>";
        }
        if(empty($telefono)){
            echo"<p class='error'> *** Agrega tu teléfono *** </p>";
        }
        if(empty($email)){
            echo"<p class='error'> *** Agrega tu email *** </p>";
        }
        if(empty($contrasena)){
            echo"<p class='error'> *** Agrega tu contraseña *** </p>";
        }
        if(empty($confirma)){
            echo"<p class='error'> *** Agrega tu confirmación de contraseña *** </p>";
        }
    }

?>