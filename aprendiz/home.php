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
  <div class="courses">
    <div class="my-courses course-1">
      <h2 class="h2">Curso A2</h2>
      <img class="curso-a2" src="../images/conduccion-A2.svg" alt="Curso-de-motos.svg" />
      <button class="buttom buttom-open">Ver contenido</button>

      <div class="div-container">

        <div class="header-container">
          <h2 class="h2">Contenido Curso A2</h2>
          <button class="buttom2 buttom-close">X</button>
          <section class="section section-a1">
            <h1 class="section-h1">Adaptacion al medio</h1>
            <p class="p">Dar a conocer a los estudiantes, los elementos que conforman la vía, la dinámica de la
              accidentalidad en Colombia, la interrelación y normas que indican a la persona, la manera
              adecuada de transitarlas, tanto por su seguridad como por la de los demás.</p>
              <a href="">Ver más</a>
            </section>
          <section class="section section-a2">

            <h1 class="section-h1">Marco legal</h1>
            <p class="p">Brindar al estudiante toda la información que comprende la normatividad del Código Nacional de
              Tránsito.</p>
             
          </section>
          <section class="section section-a3">

            <h1 class="section-h1">Etica vial</h1>
            <p class="p">Brindar los fundamentos y valores de la humanidad para impartirlos en las carreteras nacionales e internacionales</p>
            <a href="content.html">Ver más</a>
          </section>
          <section class="section section-a4">

            <h1 class="section-h1">Técnicas de conducción</h1>
            <p class="p">Aplicar una serie de técnicas, desde la manera correcta de sujetar el volante hasta la realización
              ordenada de una percepción de gestos que optimizan los movimientos y garantice la máxima
              precisión de éstos.</p>
              <a href="content.html">Ver más</a>
          </section>
          <section class="section section-a5">

            <h1 class="section-h1">Mécanica</h1>
            <p class="p">Entender el funcionamiento de un automóvil mediante una capacitación teórica, que permita una
              mejor comprensión de los distintos sistemas que lo componen, sus partes y el mantenimiento
              oportuno que se le debe realizar.</p>
              <a href="content.html">Ver más</a>
          </section>
        </div>

      </div>
    </div>
    <div class="my-courses course-2">
      <h2 class="h2">Curso B1</h2>
      <img class="curso-a2" src="../images/conduccion-B1.svg" alt="Curso-de-vehiculos-particulares.svg" />
      <button class="buttom buttom-open2">Ver contenido</button>
      <div class="div-container container2">
        <div class="header-container">
          <h1>Contenido curso B1</h1>
          <button class="buttom2 buttom-close2">X</button>
        </div>

      </div>
    </div>
    <div class="my-courses course-3">
      <h2 class="h2">Curso C1</h2>
      <img class="curso-a4" src="../images/conduccion-C1.svg" alt="Curso-de-vehiculos-publicos.svg" />
      <button class="buttom buttom-open3">Ver contenido</button>
      <div class="div-container container3">
        <div class="header-container">
          <h1>Contenido curso C1</h1>
          <button class="buttom2 buttom-close3">X</button>
        </div>
        <section class="section">
          <h1>Adaptación al medio</h1>
          <p>Resumen</p>
          <!-- <img src="../images/pdf.svg" alt="pdf.pdf" class="link-pdf" href="../docs/GAC-M02-V02 MANUAL DE ADAPTACION AL MEDIO.pdf#Adaptacion" class="link-pdf" target="_blank"> -->
        </section>
        <section class="section">
          <h1>Marco legal</h1>
          <p>Resumen</p>
          <a href="../docs/GAC-M02-V02 MANUAL DE ADAPTACION AL MEDIO.pdf#Adaptacion" class="link-pdf" target="_blank">PDF</a>
        </section>
        <section class="section">
          <h1>Etica vial</h1>
          <p>Resumen</p>
          <a href="../docs/GAC-M02-V02 MANUAL DE ADAPTACION AL MEDIO.pdf#Adaptacion" class="link-pdf" target="_blank">PDF</a>
        </section>
        <section class="section">
          <h1>Técnicas de conducción</h1>
          <p>Resumen</p>
          <a href="../docs/GAC-M02-V02 MANUAL DE ADAPTACION AL MEDIO.pdf#Adaptacion" class="link-pdf" target="_blank">PDF</a>
        </section>
        <section class="section">
          <h1>Mécanica</h1>
          <p>Resumen</p>
          <a href="../docs/GAC-M02-V02 MANUAL DE ADAPTACION AL MEDIO.pdf#Adaptacion" class="link-pdf" target="_blank">PDF</a>
        </section>
      </div>
    </div>
    <div class="my-courses course-4">
      <h2 class="h2">Curso Montacargas</h2>
      <img class="curso-a5" src="../images/montacargs.svg" alt="Curso-de-vehiculos-publicos.svg" />
      <button class="buttom buttom-open4">Ver contenido</button>
      <div class="div-container container4">
        <div class="header-container">
          <h1>Contenido curso Montacargas</h1>
          <button class="buttom2 buttom-close4">X</button>
        </div>
        <section class="section">
          <h1>Adaptación al medio</h1>
          <p>Resumen</p>
          <a href="../docs/GAC-M02-V02 MANUAL DE ADAPTACION AL MEDIO.pdf#Adaptacion" class="link-pdf" target="_blank">PDF</a>
        </section>
        <section class="section">
          <h1>Marco legal</h1>
          <p>Resumen</p>
          <a href="../docs/GAC-M02-V02 MANUAL DE ADAPTACION AL MEDIO.pdf#Adaptacion" class="link-pdf" target="_blank">PDF</a>
        </section>
        <section class="section">
          <h1>Etica vial</h1>
          <p>Resumen</p>
          <a href="../docs/GAC-M02-V02 MANUAL DE ADAPTACION AL MEDIO.pdf#Adaptacion" class="link-pdf" target="_blank">PDF</a>
        </section>
        <section class="section">
          <h1>Técnicas de conducción</h1>
          <p>Resumen</p>
          <a href="../docs/GAC-M02-V02 MANUAL DE ADAPTACION AL MEDIO.pdf#Adaptacion" class="link-pdf" target="_blank">PDF</a>
        </section>
        <section class="section">
          <h1>Mecánica</h1>
          <p>Resumen</p>
          <a href="../docs/GAC-M02-V02 MANUAL DE ADAPTACION AL MEDIO.pdf#Adaptacion" class="link-pdf" target="_blank">PDF</a>
        </section>
      </div>
      <script src="../js/index.js"></script>
    </div>
  </div>
</body>

</html>