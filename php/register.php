<?php
    include ('config.php');
    session_start();
   
if (isset($_POST['register'])) {
   
    $name1 = $_POST['label-firstname'];
    $name2 = $_POST['label-secondname'];
    $last_name1 = $_POST['label-lastname-1'];
    $last_name2 = $_POST['label-lastname-2'];
    $email = $_POST['label-count'];
    $documento = $_POST['label-id'];
    $fecha = $_POST['label-birth'];
    $tel = $_POST['label-contact'];
    $password1 = $_POST['label-passwd-1'];
    $password2 = $_POST['label-passwd-2'];

    if($password1 == $password2){
    $password_hash1 = password_hash($password1, PASSWORD_BCRYPT);
    $password_hash2 = password_hash($password2, PASSWORD_BCRYPT);
 
    $name = $name1 ." " .$name2 . " " .$last_name1 . " " . $last_name2;
 
    $query = $connection->prepare("SELECT * FROM aprendiz WHERE correo=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    
    if ($query->rowCount() > 0) {
        echo '<p class="error">El correo ya esta registrado con otro usuario</p>';
    }
 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO aprendiz(id_apren,nombre_apren,correo,fecha_creacion,password_apren) VALUES (:documento,:name,:email,:fecha,:password_hash1)");
        $query->bindParam("documento", $documento, PDO::PARAM_STR);
        $query->bindParam("name", $name, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("fecha", $fecha, PDO::PARAM_STR);
        $query->bindParam("password_hash1", $password_hash1, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">Nuevo aprendiz agregado</p>';
        } else {
            echo '<p class="error">Error al crear aprendiz, por favor intentelo nuevamente!</p>';
        }
    }
}
    }else{
        echo "error404";
    }
  
?>