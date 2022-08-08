<?php 
    if(isset($_POST['confirmar'])){
        if(empty($nombre)){
            echo "<p class='error'> Agrega tu nombre </p>";
        }
        if(empty($apellidoP)){
            echo "<p class='error'> Agrega tu apellido paterno </p>";
        }
        if(empty($apellidoM)){
            echo "<p class='error'> Agrega tu apellido materno </p>";
        }
        if(empty($telefono)){
            echo "<p class='error'> Agrega tu telefono </p>";
            } else {
                if(!is_numeric($telefono)){
                    echo "<p class='error'>la edad debe ser un numero</p>";
                }
            }
        
        if(empty($correo)){
            echo "<p class='error'> Agrega tu correo </p>";
        } else {
            if(!filter_var($correo, FILTER_VALIDATE_))
        }
        if(empty($password)){
            echo "<p class='error'> Agrega tu password </p>";
        }
    }

?>