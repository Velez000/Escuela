<?
    $conn = mysqli_connect('localhost','root','','db_escuela');

    if($conn){
        //die ("Error al conectar" . mysqli_connect_error());
        echo "conexion exitosa";
    }
?>