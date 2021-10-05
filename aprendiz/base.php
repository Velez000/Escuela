<?php
include_once '../php/users.php';
session_start();

if (!isset($_SESSION['user_id2'])) {
  header('Location: ../index.html');
  exit;
} else {
  // Error!
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/styles-dist.css" />
  <link rel="shortcut icon" href="../images/condu.ico" type="image/x-icon">
  <title>Inicio aprendiz</title>
</head>

<body>
  <header class="header">
    <div class="logo">
      <img class="logo-conduzcamos" src="../images/Logo-conduzcamos.png" alt="Logo-conduzcamos.svg" />
    </div>
    <div class="div-information-basic">
      <input class="name-user" type="text" readonly value="<?php echo $result_name ?>" />
      <input class="Class-Date-current" type="text" readonly value="<?php echo $fecha_es ?>" />
    </div>
  </header>
  <div class="menu-select">
    <ul class="list">
      <li class="item">
        <a class="link-menu" href="../aprendiz/home.php">Mis cursos</a>
      </li>
      <li class="item">
        <a class="link-menu" href="../aprendiz/evaluation.php">Evaluaciones</a>
      </li>
      <li class="item">
        <a class="link-menu" href="../aprendiz/rating.php">Calificaciones</a>
      </li>
      <li class="item">
        <a class="link-menu" href="../index.html">Cerrar sesion</a>
      </li>
    </ul>
  </div>
  <div class="imagen-volante">
  <img src="../images/hola volante.gif" alt="" class="volante">
  </div>