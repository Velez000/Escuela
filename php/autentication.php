<?php
 
include('config.php');
session_start();
    $user = $_POST['select-user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($user == "Administrador"){
        $query = $connection->prepare("SELECT * FROM administrador WHERE correo=:email");

        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
    
        $result = $query->fetch(PDO::FETCH_ASSOC);
    
        if (!$result) {
            header('Location: ../index.html');
        } else {
            if (password_verify($password, $result['password1'])) {
                $_SESSION['user_id'] = $result['id_admin'];
                header('Location: ../admin/home.php');
            } else {
                header('Location: ../index.html');
        }
    }
    }else if($user == "Aprendiz"){
        $query = $connection->prepare("SELECT * FROM aprendiz WHERE correo=:email");

        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
    
        $result = $query->fetch(PDO::FETCH_ASSOC);
    
        if (!$result) {
            header('Location: ../index.html');
        } else {
            if (password_verify($password, $result['password_apren'])) {
                $_SESSION['user_id'] = $result['id_apren'];
                header('Location: ../aprendiz/home.php');
            } else {
                header('Location: ../index.html');
        }
    }
    }else{
        header('Location: ../index.html');
    }

?>