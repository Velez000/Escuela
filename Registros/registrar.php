<?php
    include("con_db.php");

    if (isset($_POST['GUARDAR'])) 
    
    {
        if (strlen($_POST['Correo']) >= 1 && strlen($_POST['Cedula']) >= 1 && strlen($_POST['Contraseña']) >= 1 ) 
        
        {
            $Correo = trim($_POST['Correo']);
            $Cedula = trim($_POST['Cedula']);
            $Contraseña = trim($_POST['Contraseña']);
            $fechareg = date("d/m/y");
            $consulta = "INSERT INTO administrador(Correo, Cedula, Contraseña, Fecha_de_registro) VALUES ('$Correo','$Cedula','$Contraseña','$fechareg')";
            $resultado = mysqli_query($conex,$consulta);

            if ($resultado) 
            
            {
               ?>
               <h3 class = "ok">!USUARIO AGREGADO CORRECTAMENTE</h3>
               <?php               
            }

            else
            {
                ?>
                <h3 class="bad">!Ups ha ocurrido un error! </h3>
                <?php 
            }          
        }

        else
        {
            ?>
            <h3 class="bad"> Complete todos los campos por favor </h3>
            <?php 
        }
    }
?>
