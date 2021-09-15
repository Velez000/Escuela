<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/styles-dist.css" />
    <title>Inicio aprendiz</title>
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
          <a class="link-menu" href="../aprendiz/home.php">Mis cursos</a>
        </li>
        <li class="item">
          <a class="link-menu" href="../aprendiz/evaluation.php"
            >Evaluaciones</a>
        </li>
        <li class="item">
          <a class="link-menu" href="../aprendiz/rating.php">Calificaciones</a>
        </li>
        <li class="item">
          <a class="link-menu" href="../index.html">Cerrar sesion</a>
        </li>
      </ul>
    </div>
    <div class="courses">
      <div class="my-courses course-1">
        <h2>Curso A2</h2>
        <img
          class="curso-a2"
          src="../images/conduccion-A2.svg"
          alt="Curso-de-motos.svg"
        />
        <button class="buttom buttom-open">Evaluaciones</button>
        <div class="div-container">
          <div class="header-container">
            <h1>Contenido curso A2</h1>
            <button class="buttom2 buttom-close">X</button>
          </div>

          </div>
        </div>
      </div>
      <div class="my-courses course-2">
        <h2>Curso B1</h2>
        <img
          class="curso-a2"
          src="../images/conduccion-B1.svg"
          alt="Curso-de-vehiculos-particulares.svg"
        />
        <button class="buttom buttom-open2">Evaluaciones</button>
        <div class="div-container container2">
          <div class="header-container">
            <h1>Contenido curso B1</h1>
            <button class="buttom2 buttom-close2">X</button>
          </div>
          <p>
         ‘Hoy por ti,
          mañana por mí’.
          </p>
        </div>
      </div>
      <div class="my-courses course-3">
        <h2>Curso C1</h2>
        <img
          class="curso-a4"
          src="../images/conduccion-C1.svg"
          alt="Curso-de-vehiculos-publicos.svg"
        />
        <button class="buttom buttom-open3">Evaluaciones</button>
        <div class="div-container container3">
          <div class="header-container">
            <h1>Contenido curso C1</h1>
            <button class="buttom2 buttom-close3">X</button>
          </div>
          <p>
          ‘Hoy por ti,
          mañana por mí’.
          </p>
        </div>
      </div>
      <div class="my-courses course-4">
        <h2>Curso Montacargas</h2>
        <img
          class="curso-a5"
          src="../images/montacargs.svg"
          alt="Curso-de-vehiculos-publicos.svg"
        />
        <button class="buttom buttom-open4">Evaluaciones</button>
        <div class="div-container container4">
          <div class="header-container">
            <h1>Contenido curso Montacargas</h1>
            <button class="buttom2 buttom-close4">X</button>
          </div>
          <p>
         ‘Hoy por ti,
          mañana por mí’.
          </p>
        </div>
        <script src="../js/index.js"></script>
      </div>
    </div>
  </body>
</html>
