<?php

$host = 'localhost';
$name = 'user';
$passd = '';
$database = 'db_escuela';

 $conexion = mysqli_connect('localhost','root','','db_escuela');

 if($conexion==false){
     echo "Error al conectar con la base de datos";
 }

?>