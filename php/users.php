<?php
    $conn = mysqli_connect('localhost', 'root', '', 'db_escuela');
    if ($conn) {
        //echo "Conexion exitosa";
    } else {
        echo "Error en la conexion";
    }
    $query = mysqli_query($conn, "SELECT * FROM aprendiz ");
    while ($restultado = mysqli_fetch_array($query)) {
        $result_name = $restultado['nombre_apren'];
    }
    
    date_default_timezone_set('UTC');
                                                                
    setlocale(LC_TIME, 'spanish'); //Windows
    $fecha=time();
    $fecha_es= strtotime($fecha);
    $fecha_es=strftime("%B  %d del %Y", $fecha);

    $query2 = mysqli_query($conn, "SELECT * FROM administrador ");
     while ($restultado2 = mysqli_fetch_array($query2)) {
     $result_name_admin = $restultado2['nombre'];
    }

?>