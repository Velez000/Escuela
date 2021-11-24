<!-- Conexion a la base de datos utilizando PDO para el login y una consulta sencilla que esta para pruebas 
de traer el nombre de usuario siendo consultas normales, es buena opcion en las consultas normales intentar cambiarlas a PDO -->

<?php
define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'db_escuela');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

$conn = mysqli_connect('localhost','root','','db_escuela');
?>