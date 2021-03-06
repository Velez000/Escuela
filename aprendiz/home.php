<?php
  // Llamamos al fichero base para incluir el menu
include('../aprendiz/base.php');
?>
<!-- Cursos -->
<div class="courses">

  <div class="my-courses course-1">
    <h2 class="h2">Curso A2</h2>
    <img class="img-course" src="../images/conduccion-A2.svg" alt="Curso-de-motos.svg" />
    <button class="buttom buttom-open">Ver contenido</button>
  </div>

  <div class="my-courses course-2">
    <h2 class="h2">Curso B1</h2>
    <img class="img-course" src="../images/conduccion-B1.svg" alt="Curso-de-vehiculos-particulares.svg" />
    <button class="buttom buttom-open2">Ver contenido</button>

  </div>

  <div class="my-courses course-3">
    <h2 class="h2">Curso C1</h2>
    <img class="img-course" src="../images/conduccion-C1.svg" alt="Curso-de-vehiculos-publicos.svg" />
    <button class="buttom buttom-open3">Ver contenido</button>
  </div>

  <div class="my-courses course-4">
    <h2 class="h2">Curso Montacargas</h2>
    <img class="img-course" src="../images/montacargs.svg" alt="Curso-de-montacargas.svg" />
    <button class="buttom buttom-open4">Ver contenido</button>
  </div>
</div>


<!-- Contenido del curso A2 -->

<div class="contentA2">
  <section class="sectionA2">
    <h1 class="title-content">Contenido del curso A2</h1>
    <button class="buttom buttom2">X</button>
  </section>

  <!-- Adaptacion al medio  -->
  <div class="modules module-1">
    <h2>Adaptación al medio</h2>
    <p class="p">Dar a conocer a los estudiantes, los elementos que conforman la vía, la dinámica de la
      accidentalidad en Colombia, la interrelación y normas que indican a la persona, la manera
      adecuada de transitarlas, tanto por su seguridad como por la de los demás.</p>
    <a href="#miModal" class="link-content">Ver contenido</a>
  </div>


  <!-- Marco legal -->
  <div class="modules module-2">
    <h2>Marco legal</h2>
    <p class="p">Brindar al estudiante toda la información que comprende la normatividad del Código Nacional de
      Tránsito.</p>
    <a href="#modal2" class="link-content">Ver contenido</a>
  </div>


  <!-- Etica vial -->
  <div class="modules module-3">
    <h2>Etica vial</h2>
    <p class="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus esse, unde corrupti autem dolorem vero doloremque illum deserunt nam voluptatibus, libero magnam. Dignissimos possimus quidem fuga, debitis ipsa recusandae inventore. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi voluptate nulla minus distinctio ea provident ratione, laborum labore perferendis impedit, amet perspiciatis aperiam dolorum repellat, illo molestias cupiditate vero. Voluptatem.</p>
    <a href="#modal3" class="link-content">Ver contenido</a>
  </div>


  <!-- Tecnicas de conduccion -->
  <div class="modules module-4">
    <h2>Técnicas de conducción</h2>
    <p class="p">Aplicar una serie de técnicas, desde la manera correcta de sujetar el volante hasta la realización
      ordenada de una percepción de gestos que optimizan los movimientos y garantice la máxima
      precisión de éstos. </p>
    <a href="#modal4" class="link-content">Ver contenido</a>
  </div>


  <!-- Mecanica -->
  <div class="modules module-5">
    <h2>Mecánica</h2>
    <p class="p">Entender el funcionamiento de un automóvil mediante una capacitación teórica, que permita una
      mejor comprensión de los distintos sistemas que lo componen, sus partes y el mantenimiento
      oportuno que se le debe realizar. </p>
    <a href="#modal5" class="link-content">Ver contenido</a>
  </div>
</div>


<!-- Contenido de los cursos -->
<!--Contenido Adaptación-->
<div id="miModal" class="modal">
  <div class="modal-contenido">
    <a href="#" class="buttom-close-modal">X</a>
    <h2 class="subtitle">ADAPTACIÓN AL MEDIO</h2>
    <div class="tlp temp1">
      <h4>Tránsito de vehículos</h4>
      <p>Deben transitar obligatoriamente, por sus respectivos carriles, dentro
        las líneas de demarcación y atravesarlos solamente para efectuar maniobras de
        adelantamiento. Para efectuar dicha maniobra, el conductor debe anunciar su intención por
        medio de las luces direccionales con el fin de poner en peligro a los demás vehículos o
        peatones.
      </p>
      <img src="../images/vehiculos_00001.svg" alt="Vehiculos en la ciudad" class="tlp-img">
    </div>
    <div class="tlp temp2">
      <h3>Utilización de los carriles</h3>
      <p>Los vehículos transitaran en, vía de sentido único de tránsito y vías
        de doble sentido de tránsito. La primera comprende, aquellas vías con velocidad reglamentada
        para sus carriles. La segunda, la compone: 2 carriles; por el carril de su derecha y utilizar con
        precaución el de la izquierda para maniobras de adelanto y respetar la señalización
        correspondiente.
      </p>
      <img src="../images/carriles.svg" alt="Vehiculos en la ciudad" class="tlp-img">
    </div>
    <div class="tlp temp3">
      <h3>Factores que intervienen en el transito </h3>
      <h4>Transito:</h4>
      <p>Desplazamiento organizado de personas, animales y vehículos que se desplazan por una vía pública o privada abierta al público.</p>
      <h4 class="h4f">Factor humano y vehicular</h4>
      <img src="../images/peatones.svg" alt="Personas en la via" class="tlp-img img1">
    </div>
    <div class="tlp temp4">
      <h3>Factor humano</h3>
      <h4>Actores principales de la via:</h4>
      <li class="articles"> <a href="http://www.secretariasenado.gov.co/senado/basedoc/ley_0769_2002_pr001.html" class="link-external" target="_blank"> <strong>Peaton: </strong> Aticulos 57 y 58 del código nacional de tránsito </a></li>
      <li class="articles"> <a href="https://leyes.co/codigo_nacional_de_transito_terrestre/92.htm" class="link-external" target="_blank"> <strong>Pasajero: </strong> Aticulo 92 del código nacional de tránsito</a></li>
      <li class="articles"> <a href="https://principal.notinet.com.co/codigos/capitulos.php?id=3618" class="link-external" target="_blank"><strong>Conductor: </strong> Aticulos 60 - 80 del código nacional de tránsito</a></li>

      <img src="../images/actores de la via.svg" alt="Actores de la via.svg" class="tlp-img img2">
    </div>
    <div class="tlp temp5">
      <h3>Factor vehicular</h3>
      <h4>Vehículos: </h4>
      <p>Todo aparato montado sobre ruedas con o sin motor que permite el transporte de personas o cosas de un lugar a otro. </p>
      <strong class="txt">Vehículo no automotor</strong>
      <img src="../images/bicicleta.svg" alt="Vehiculo no automotor" class="tlp-img img3">
      <strong class="txt2">Vehículo automotor</strong>
      <img src="../images/moto y carro.svg" alt="Vehículos automotor" class="tlp-img img4">
    </div>
    <div class="tlp temp6">
      <h3>Licencias</h3>
      <img src="../images/licencias.svg" alt="licencias de conducción" class="tlp-img img5">
    </div>
    <div class="tlp temp7">
      <h3>Elementos de la via</h3>
      <img src="../images/elemetos de la via.svg" alt="Elementos de la via" class="tlp-img img6">
      <img src="../images/elementos2.svg" alt="Elementos de la via urbana" class="tlp-img img6-1">
    </div>
    <div class="tlp temp8">
      <h3>Señales de transito</h3>
      <img src="../images/señales-informativas.svg" alt="Señales informativas" class="tlp-img img7">
      <img src="../images/Señales-Preventivas.svg" alt="Señales preventivas" class="tlp-img img8">
      <img src="../images/reglamentarias.svg" alt="Señales reglamentarias" class="tlp-img img9">
      <img src="../images/Señales-manuales.svg" alt="Señales manuales" class="tlp-img img10">
    </div>
    <div class="tlp temp9">
      <h3>Accidentalidad</h3>
      <h4>Causas de accidentalidad en Colombia:</h4>
      <h5>Exceso de velocidad</h5>
      <p>El código nacional de tránsito, en el artículo 106 estipula los 3 tipos de velocidad. En sectores residenciales, es de 30Km/hr; en avenida es de 60KM y carretera es de 80Km/hr o en esta última, pueden existir algunas variables.</p>
      <img src="../images/exceso de velocidad.svg" alt="Exceso de velocidad" class="tlp-img">
    </div>
    <div class="tlp temp10">
      <h5>Efecto túnel:</h5>
      <p>Es la situación que se da cuando se produce un cataclismo perceptivo, cuando se va aumentando la velocidad de un vehículo automotor, los ángulos visuales laterales se agudizan, haciendo que una persona solo se concentre en un punto fijo del carril. Esto conlleva a que el conductor tenga un menor tiempo de reacción y a la vez un menor tiempo de frenado…</p></strong>
      <img src="../images/Efecto-tunel.svg" alt="Efecto tunel" class="tlp-img">
    </div>
    <div class="tlp temp11">
      <h5>Distracciones</h5>
      <p>Esta es la segunda causa de accidentalidad a nivel nacional, esta se origina por la manipulación del teléfono móvil, ya sea enviando mensajes de texto o enviando llamadas. Otros factores que generan distracciones, puede ser por algo que vemos o por algo que escuchamos o inclusive algo que se manifieste en la vía durante el recorrido, como un accidente de tránsito, etc. </p>
      <img src="../images/distraccion.svg" alt="Conductor distraido" class="tlp-img">
    </div>

    <div class="tlp temp12">
      <h5>Consumo de sustancias psicoactivas y alcohol </h5>
      <p>Se considera como la tercera causa de accidentalidad a nivel nacional, a pesar de que es una de las sanciones más costosas aún se sigue presentando entre las primeras 5 causales a nivel nacional. El ministerio de transporte en conjunto con la súper intendencia general de puertos y transporte han interpuesto diferentes leyes para promover la disminución de esta causa de accidentalidad.</p>
      <img src="../images/alcohol.svg" alt="Consumo de alcohol" class="tlp-img">
    </div>
    <div class="tlp temp13">
      <h5>¡No respetar las señales de tránsito¡</h5>
      <p>Es muy común que los conductores que ya llevan una vasta experiencia en el tema de conducción, sean muy confiados y seguros, esto los lleva a tomar decisiones que en algunos casos resultan equivocas por no respetar una señal de pare, un semáforo, etc. </p>
      <img src="../images/accidentabilidad.svg" alt="Accidente de transito" class="tlp-img">
    </div>
    <div class="tlp temp14">
      <h5>La impericia </h5>
      <p>La falta de conocimientos muchas veces lleva a que las personas cometan fácilmente un accidente, podemos resaltar también que los malos hábitos producen este tipo de situaciones.</p>
      <iframe class="video" src="https://www.youtube.com/embed/FubYU-Ip2ag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <button onclick="incrementClick()" class="btn btn-next">Siguiente</button>
    <button onclick="decrementClick()" class="btn btn-back">Retroceder</button>
  </div>
</div>
<!-- Falta el resto del contenido -->

<div id="modal2" class="modal">
  <div class="modal-contenido">
    <a href="#" class="buttom-close-modal">X</a>
    <h2 class="subtitle">MARCO LEGAL</h2>
    <div class="tlp">
      <h4>Marco 1</h4>
    </div>
    <div class="tlp temp15">
      <h4>Marco 2</h4>
    </div>
    <div class="tlp temp16">
      <h4>Marco 3</h4>
    </div>
    <div class="tlp temp17">
      <h4>Marco 4</h4>
    </div>
    <div class="tlp temp18">
      <h4>Marco 5</h4>
    </div>
    <div class="tlp temp19">
      <h4>Marco 6</h4>
    </div>
    <div class="tlp temp20">
      <h4>Marco 7</h4>
    </div>
    <div class="tlp temp21">
      <h4>Marco 8</h4>
    </div>
    <div class="tlp temp22">
      <h4>Marco 9</h4>
    </div>
    <div class="tlp temp23">
      <h4>Marco 10</h4>
    </div>
    <div class="tlp temp24">
      <h4>Marco 11</h4>
    </div>
    <div class="tlp temp25">
      <h4>Marco 12</h4>
    </div>
    <div class="tlp temp26">
      <h4>Marco 1</h4>
    </div>
    <div class="tlp temp27">
      <h4>Marco 13</h4>
    </div>
  </div>
</div>




<div id="modal3" class="modal">
  <div class="modal-contenido">
    <a href="#" class="buttom-close-modal">X</a>
    <h2 class="subtitle">ETICA VIAL</h2>
    <div class="tlp">
      <h4>Primer contenido</h4>
    </div>
    <div class="tlp temp28">
      <h4>Etica Vial 1</h4>
    </div>
    <div class="tlp temp29">
      <h4>Etica Vial 2</h4>
    </div>
    <div class="tlp temp30">
      <h4>Etica Vial 3</h4>
    </div>
    <div class="tlp temp31">
      <h4>Etica Vial 4</h4>
    </div>
    <div class="tlp temp32">
      <h4>Etica Vial 5</h4>
    </div>
    <div class="tlp temp33">
      <h4>Etica Vial 6</h4>
    </div>
    <div class="tlp temp34">
      <h4>Etica Vial 7</h4>
    </div>
    <div class="tlp temp35">
      <h4>Etica Vial 8</h4>
    </div>
    <div class="tlp temp36">
      <h4>Etica Vial 9</h4>
    </div>
    <div class="tlp temp37">
      <h4>Etica Vial 10</h4>
    </div>
    <div class="tlp temp38">
      <h4>Etica Vial 11</h4>
    </div>
    <div class="tlp temp39">
      <h4>Etica Vial 12</h4>
    </div>
    <div class="tlp temp40">
      <h4>Etica Vial 13</h4>
    </div>
  </div>
</div>


<div id="modal4" class="modal">
  <div class="modal-contenido">
    <a href="#" class="buttom-close-modal">X</a>
    <h2 class="subtitle">TÉCNICAS DE CONDUCCIÓN</h2>
    <div class="tlp">
      <h4>Técnicas 1</h4>
    </div>
    <div class="tlp temp41">
      <h4>Técnicas 2</h4>
    </div>
    <div class="tlp temp42">
      <h4>Técnicas 3</h4>
    </div>
    <div class="tlp temp43">
      <h4>Técnicas 4</h4>
    </div>
    <div class="tlp temp44">
      <h4>Técnicas 5</h4>
    </div>
    <div class="tlp temp45">
      <h4>Técnicas 6</h4>
    </div>
    <div class="tlp temp46">
      <h4>Técnicas 7</h4>
    </div>
    <div class="tlp temp47">
      <h4>Técnicas 8</h4>
    </div>
    <div class="tlp temp48">
      <h4>Técnicas 9</h4>
    </div>
    <div class="tlp temp49">
      <h4>Técnicas 10</h4>
    </div>
    <div class="tlp temp50">
      <h4>Técnicas 11</h4>
    </div>
    <div class="tlp temp51">
      <h4>Técnicas 12</h4>
    </div>
    <div class="tlp temp52">
      <h4>Técnicas 13</h4>
    </div>
  </div>
</div>


<div id="modal5" class="modal">
  <div class="modal-contenido">
    <a href="#" class="buttom-close-modal">X</a>
    <h2 class="subtitle">MECÁNICA</h2>
    <div class="tlp">
      <h4>Mecanica 1</h4>
    </div>
    <div class="tlp temp54">
      <h4>Mecanica 2</h4>
    </div>
    <div class="tlp temp55">
      <h4>Mecanica 3</h4>
    </div>
    <div class="tlp temp56">
      <h4>Mecanica 3</h4>
    </div>
    <div class="tlp temp57">
      <h4>Mecanica 3</h4>
    </div>
    <div class="tlp temp58">
      <h4>Mecanica 3</h4>
    </div>
    <div class="tlp temp59">
      <h4>Mecanica 3</h4>
    </div>
    <div class="tlp temp60">
      <h4>Mecanica 3</h4>
    </div>
    <div class="tlp temp61">
      <h4>Mecanica 3</h4>
    </div>
    <div class="tlp temp62">
      <h4>Mecanica 3</h4>
    </div>
    <div class="tlp temp63">
      <h4>Mecanica 3</h4>
    </div>
    <div class="tlp temp64">
      <h4>Mecanica 3</h4>
    </div>
    <div class="tlp temp65">
      <h4>Mecanica 3</h4>
    </div>
    <div class="tlp temp66">
      <h4>Mecanica 3</h4>
    </div>
  </div>
</div>

</html>
<script src="../js/app.js"></script>
<script src="../js/modals.js"></script>
