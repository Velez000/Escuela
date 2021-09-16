<?php
session_start();
if (session_destroy()) {
    echo "Sesión destruida correctamente";
    header('Location: ../index.html');
} else {
    echo "Error al destruir la sesión";
}
?>

