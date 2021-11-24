<!-- Verificación del login del administrador -->

<?php
session_start();


if (!isset($_SESSION['user_id'])) {
  header('Location: ../index.html');
  exit;
} else {
  $conn = mysqli_connect('localhost', 'root', '', 'db_escuela');
  $query2 = mysqli_query($conn, "SELECT * FROM administrador where id = ".$_SESSION['user_id']);
  while ($restultado2 = mysqli_fetch_array($query2)) {
  $result_name_admin = $restultado2['nombre'];
 }

}
date_default_timezone_set('UTC');
                                                                
setlocale(LC_TIME, 'spanish');
$fecha=time();
$fecha_es= strtotime($fecha);
$fecha_es=strftime("%B  %d del %Y", $fecha);
?>

 <!-- Menu de navegacion del administrador -->
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/styles-dist.css" />
  <link rel="shortcut icon" href="../images/condu.ico" type="image/x-icon">
  <title>Inicio</title>
</head>

<body>
  <header class="header">
    <div class="logo">
      <img class="logo-conduzcamos" src="../images/Logo-conduzcamos.png" alt="Logo-conduzcamos.png" />
    </div>
    <div class="div-information-basic">
      <input class="name-user" type="text" readonly value="<?php echo $result_name_admin?>" />
      <input class="Class-Date-current" type="text" readonly value="<?php echo $fecha_es?>"/>
    </div>
  </header>
  <div class="menu-select">
    <ul class="list">
      <li class="item">
        <a class="link-menu" href="home.php">Inicio</a>
      </li>
      <li class="item">
        <a class="link-menu" href="rating.php">Calificaciones</a>
      </li>
      <li class="item">
        <a class="link-menu" href="update-dates.php">Datos</a>
      </li>
      <li class="item">
        <a class="link-menu" href="../php/deleted.php">Cerrar sesion</a>
      </li>
    </ul>
 
  </div>
