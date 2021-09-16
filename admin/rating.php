<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: ../index.html');
    exit;
} else {
    // Show users the page!
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/styles-dist.css" />
    <title>Calificaciones</title>
  </head>

  <body>
    <header class="header">
      <div class="logo">
        <img
          class="logo-conduzcamos"
          src="../images/Logo-conduzcamos.png"
          alt="Logo-conduzcamos.png"
        />
      </div>
      <div class="div-information-basic">
        <input
          class="name-user"
          type="text"
          readonly
          placeholder="Nombre de aprendiz"
        />
        <img
          class="profile"
          src="../images/perfil.png"
          alt="Logo-como-perfil.png"
        />
      </div>
    </header>
    <div class="menu-select">
      <ul class="list">
        <li class="item">
          <a class="link-menu" href="#">Inicio</a>
        </li>
        <li class="item">
          <a class="link-menu" href="#">Calificaciones</a>
        </li>
        <li class="item">
          <a class="link-menu" href="#">Datos</a>
        </li>
        <li class="item">
          <a class="link-menu" href="../index.html">Cerrar sesion</a>
        </li>
      </ul>
    </div>
    <div class="div-table"></div>
  </body>
</html>
