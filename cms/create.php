<?php
// Crear administradores con una contraseña hash
include('../php/config.php');
session_start();

if (isset($_POST['register'])) {
 
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
 
    $query = $connection->prepare("SELECT * FROM administrador WHERE correo=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }
 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO administrador(nombre,correo,password1) VALUES (:username,:email,:password_hash)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">Nuevo administrador agregado</p>';
        } else {
            echo '<p class="error">Error al crear administrador, por favor intentelo nuevamente!</p>';
        }
    }
}
 
?>