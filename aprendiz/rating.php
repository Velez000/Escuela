<?php
session_start();
 
if(!isset($_SESSION['user_id2'])){
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
          value="<?php
                                                            $conn = mysqli_connect('localhost', 'root', '', 'db_escuela');
                                                            if ($conn) {
                                                              //echo "Conexion exitosa";
                                                            } else {
                                                              echo "Error en la conexion";
                                                            }
                                                            $query = mysqli_query($conn, "SELECT * FROM aprendiz ");
                                                            while ($restultado = mysqli_fetch_array($query)) {
                                                              echo $restultado['nombre_apren'];
                                                            }
                                                            ?>"
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
          <a class="link-menu" href="../aprendiz/home.php">Mis cursos</a>
        </li>
        <li class="item">
          <a class="link-menu" href="../aprendiz/evaluation.php"
            >Evaluaciones</a
          >
        </li>
        <li class="item">
          <a class="link-menu" href="../aprendiz/rating.php">Calificaciones</a>
        </li>
        <li class="item">
          <a class="link-menu" href="../index.html">Cerrar sesion</a>
        </li>
      </ul>
    </div>
  </body>
</html>
