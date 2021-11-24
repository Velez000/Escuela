<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>REGRISTRO</title>
</head>
<body>
    <form method="post">
        <h1>CONDUZCAMOS</h1>
        <input type="email" name="Correo" placeholder="Ingrese correo electronico">
        <input type="number" name="Cedula" placeholder="Ingrese Cedula">
        <input type="password" name="Contraseña" placeholder="Ingrese Contraseña">
        <input type="submit" name="GUARDAR"> 
    </form>

    <?php

    include("registrar.php");

    ?>
</body>
</html>