<?php
    $select = $_POST['select-user'];

    if($select == "Administrador"){
        header('Location: ../admin/home.php');
    }else if($select == "Aprendiz"){
        header('Location: ../aprendiz/home.php');
    }
?>