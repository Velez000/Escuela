<?php
session_start();

if (!isset($_SESSION['user_id'])) {
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
  <title>Inicio</title>
</head>

<body>
  <header class="header">
    <div class="logo">
      <img class="logo-conduzcamos" src="../images/Logo-conduzcamos.png" alt="Logo-conduzcamos.png" />
    </div>
    <div class="div-information-basic">
      <input class="name-user" type="text" readonly value="<?php
                                                            $conn = mysqli_connect('localhost', 'root', '', 'db_escuela');
                                                            if ($conn) {
                                                              //echo "Conexion exitosa";
                                                            } else {
                                                              echo "Error en la conexion";
                                                            }
                                                            $query = mysqli_query($conn, "SELECT * FROM administrador ");
                                                            while ($restultado = mysqli_fetch_array($query)) {
                                                              echo $restultado['nombre'];
                                                            }
                                                            ?>" />
      <img class="profile" src="../images/perfil.png" alt="Logo-como-perfil.png" />
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
  <div class="div-controll">
    <form action="../php/register.php" method="POST">
      <div class="div-register">
        <h1 class="h1">Registro Aprendiz</h1>
        <p class="class-ad">Por favor llenar todos los campos correctamente</p>
        <div class="div-general">
          <label for="label-firstname" class="labels">Primer nombre</label>
          <input type="text" id="label-firstname" name="label-firstname" class="input-register">
          <label for="label-secondname" class="labels">Segundo nombe</label>
          <input type="text" id="label-secondname" name="label-secondname" class="input-register">
          <label for="label-lastname-1" class="labels">Primer apellido</label>
          <input type="text" id="label-lastname-1" name="label-lastname-1" class="input-register">
          <label for="label-lastname-2" class="labels">Segundo apellido</label>
          <input type="text" id="label-lastname-2" name="label-lastname-2" class="input-register">
          <label for="label-count" class="labels">Correo</label>
          <input type="email" id="label-count" name="label-count" class="input-register">
        </div>
        <div class="div-specific">
          <label for="label-id" class="labels">Documento</label>
          <input type="number" id="label-id" name="label-id" class="input-register">
          <label for="label-birth" class="labels">Fecha de nacimiento</label>
          <input type="date" id="label-birth" name="label-birth" class="input-register">
          <label for="label-contact" class="labels">Telefono</label>
          <input type="tel" id="label-contact" name="label-contact" class="input-register">
          <label for="label-passwd-1" class="labels">Contraseña</label>
          <input type="password" id="label-passwd-1" name="label-passwd-1" class="input-register">
          <label for="label-passwd-2" class="labels">Confirmar contraseña</label>
          <input type="password" id="label-passwd-2" name="label-passwd-2" class="input-register">
        </div>

        <button type="submit" class="buttom-go" name="register" value="register">Registrar</button>

      </div>
    </form>
  </div>
</body>

</html>