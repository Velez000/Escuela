<?php
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
    <a href="#miModal2" class="link-content">Ver contenido</a>
  </div>


  <!-- Etica vial -->
  <div class="modules module-3">
    <h2>Etica vial</h2>
    <p class="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus esse, unde corrupti autem dolorem vero doloremque illum deserunt nam voluptatibus, libero magnam. Dignissimos possimus quidem fuga, debitis ipsa recusandae inventore. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi voluptate nulla minus distinctio ea provident ratione, laborum labore perferendis impedit, amet perspiciatis aperiam dolorum repellat, illo molestias cupiditate vero. Voluptatem.</p>
    <a href="#" class="link-content">Ver contenido</a>
  </div>


  <!-- Tecnicas de conduccion -->
  <div class="modules module-4">
    <h2>Técnicas de conducción</h2>
    <p class="p">Aplicar una serie de técnicas, desde la manera correcta de sujetar el volante hasta la realización
      ordenada de una percepción de gestos que optimizan los movimientos y garantice la máxima
      precisión de éstos. </p>
    <a href="#" class="link-content">Ver contenido</a>
  </div>


  <!-- Mecanica -->
  <div class="modules module-5">
    <h2>Mecánica</h2>
    <p class="p">Entender el funcionamiento de un automóvil mediante una capacitación teórica, que permita una
      mejor comprensión de los distintos sistemas que lo componen, sus partes y el mantenimiento
      oportuno que se le debe realizar. </p>
    <a href="#" class="link-content">Ver contenido</a>
  </div>
</div>

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
      <!-- <img src="../images/vehiculos_00001.svg" alt="Vehiculos en la ciudad" class="tlp-img"> -->
    </div>
    <div class="tlp temp2">
      <h3>Utilización de los carriles</h3>
      <p>Los vehículos transitaran en, vía de sentido único de tránsito y vías
        de doble sentido de tránsito. La primera comprende, aquellas vías con velocidad reglamentada
        para sus carriles. La segunda, la compone: 2 carriles; por el carril de su derecha y utilizar con
        precaución el de la izquierda para maniobras de adelanto y respetar la señalización
        correspondiente.
      </p>
      <!-- <img src="../images/carriles.svg" alt="Vehiculos en la ciudad" class="tlp-img"> -->
    </div>
    <div class="tlp temp3">
      <h3>Factores que intervienen en el transito </h3>
      <p> <strong>Transito: </strong> Desplazamiento organizado de personas, animales y vehículos que se desplazan por una vía pública o privada abierta al público.</p>
      <h4>Factor humano</h4>
      <!-- <img src="" alt="Personas en la via"> -->
      <h4>Factor vehicular</h4>
      <!-- <img src="" alt="Vehiculos en la via"> -->
    </div>
    <div class="tlp temp4">
      <h3>Factor humano</h3>
      <h4>Actores principales de la via:</h4>
      <li class="articles"> <a href="http://www.secretariasenado.gov.co/senado/basedoc/ley_0769_2002_pr001.html" class="link-external" target="_blank"> <strong>Peaton: </strong> Aticulos 57 y 58 del código nacional de tránsito </a></li>
      <li class="articles"> <a href="https://leyes.co/codigo_nacional_de_transito_terrestre/92.htm" class="link-external" target="_blank"> <strong>Pasajero: </strong> Aticulo 92 del código nacional de tránsito</a></li>
      <li class="articles"> <a href="https://principal.notinet.com.co/codigos/capitulos.php?id=3618" class="link-external" target="_blank"><strong>Conductor: </strong> Aticulos 60 - 80 del código nacional de tránsito</a></li>

      <!-- <img src="../images/accidentabilidad.svg" alt="accidentabilidad.svg" class="tlp-img"> -->
    </div>
    <div class="tlp temp5">
      <h3>Factor vehicular</h3>
      <strong>Vehículos: </strong>
      <p>Todo aparato montado sobre ruedas con o sin motor que permite el transporte de personas o cosas de un lugar a otro. </p>
      <h4>Vehículo no automotor</h4>
      <!-- <img src="" alt="Vehículo no automotor"> -->
      <h4>Vehículo automotor</h4>
      <!-- <img src="" alt="Vehículo automotor"> -->
    </div>
    <div class="tlp temp6">
      <h3>Licencias</h3>
      <p>Pendiente</p>
    </div>
    <div class="tlp temp7">
      <h3>Elementos de la via</h3>
      <!-- imagenes -->
    </div>
    <div class="tlp temp8">
      <h3>Señales de transito</h3>
      <!-- imagenes -->
    </div>
    <div class="tlp temp9">
      <h3>Accidentalidad</h3>
      <h4>Causas de accidentalidad en Colombia:</h4>
      <h5>Exceso de velocidad</h5>
      <p>El código nacional de tránsito, en el artículo 106 estipula los 3 tipos de velocidad. En sectores residenciales, es de 30Km/hr; en avenida es de 60KM y carretera es de 80Km/hr o en esta última, pueden existir algunas variables.</p>
    </div>
    <div class="tlp temp10">
      <h5>Efecto túnel:</h5>
      <p>Es la situación que se da cuando se produce un cataclismo perceptivo, cuando se va aumentando la velocidad de un vehículo automotor, los ángulos visuales laterales se agudizan, haciendo que una persona solo se concentre en un punto fijo del carril. Esto conlleva a que el conductor tenga un menor tiempo de reacción y a la vez un menor tiempo de frenado…</p></strong>
    </div>
    <div class="tlp temp11">
      <h5>Distracciones</h5>
      <p>Esta es la segunda causa de accidentalidad a nivel nacional, esta se origina por la manipulación del teléfono móvil, ya sea enviando mensajes de texto o enviando llamadas. Otros factores que generan distracciones, puede ser por algo que vemos o por algo que escuchamos o inclusive algo que se manifieste en la vía durante el recorrido, como un accidente de tránsito, etc. </p>
    </div>

    <div class="tlp temp12">
      <h5>Consumo de sustancias psicoactivas y alcohol </h5>
      <p>Se considera como la tercera causa de accidentalidad a nivel nacional, a pesar de que es una de las sanciones más costosas aún se sigue presentando entre las primeras 5 causales a nivel nacional. El ministerio de transporte en conjunto con la súper intendencia general de puertos y transporte han interpuesto diferentes leyes para promover la disminución de esta causa de accidentalidad.</p>
    </div>
    <div class="tlp temp13">
      <h5>¡No respetar las señales de tránsito¡</h5>
      <p>Es muy común que los conductores que ya llevan una vasta experiencia en el tema de conducción, sean muy confiados y seguros, esto los lleva a tomar decisiones que en algunos casos resultan equivocas por no respetar una señal de pare, un semáforo, etc. </p>
    </div>
    <div class="tlp temp14">
      <h5>La impericia </h5>
      <p>La falta de conocimientos muchas veces lleva a que las personas cometan fácilmente un accidente, podemos resaltar también que los malos hábitos producen este tipo de situaciones.</p>
    </div>
    <button onclick="incrementClick()" class="btn btn-next">Siguiente</button>
    <button onclick="decrementClick()" class="btn btn-back">Retroceder</button>
  </div>
</div>

<!--Contenido Marco legal-->
<div id="miModal2" class="modal">
  <div class="modal-contenido">
    <a href="#" class="buttom-close-modal">X</a>
    <h2 class="subtitle">MARCO LEGAL</h2>
    <div class="tlp temp6">
      <h4>Código Nacional de Tránsito y sus reglamentaciones</h4>
      <p>Pendiente
      </p>
      <img src="../images/vehiculos_00001.svg" alt="Vehiculos en la ciudad" class="tlp-img prueba">
    </div>
    <div class="tlp temp7">
      <h4>Aspectos legales del tránsito </h4>
      <p>Pendiente
      </p>
      <img src="../images/carriles.svg" alt="Vehiculos en la ciudad" class="tlp-img">
    </div>
    <div class="tlp temp8">
      <h4>Documentos obligatorios </h4>
      <p>Pendiente</p>
      <img src="../images/parqueadero.svg" alt="estacionamiento.svg" class="tlp-img1">
      <img src="../images/retrocedo-vias1.svg" alt="accidente.svg" class="tlp-img2">
    </div>
    <div class="tlp temp9">
      <h4>Licencias, clasificación y requisitos</h4>
      <p>Pendiente</p>
      <img src="../images/accidentabilidad.svg" alt="accidentabilidad.svg" class="tlp-img">
    </div>
    <div class="tlp temp10">
      <h4>Procedimientos jurídicos </h4>
      <p>Pendiente</p>
      <img src="../images/accidente_1.svg" alt="accidente.svg" class="tlp-img">
    </div>
    <div class="tlp temp11">
      <h4>Normas de salud ocupacional </h4>
      <p>Pendiente</p>
      <img src="../images/accidente_1.svg" alt="accidente.svg" class="tlp-img">
    </div>
    <div class="tlp temp12">
      <h4>Normas ambientales</h4>
      <p>Pendiente</p>
      <img src="../images/accidente_1.svg" alt="accidente.svg" class="tlp-img">
    </div>
    <div class="tlp temp13">
      <h4>Normas de convivencia </h4>
      <p>Pendiente</p>
      <img src="../images/accidente_1.svg" alt="accidente.svg" class="tlp-img">
    </div>
    <button onclick="suma()" class="btn btn-next">Siguiente</button>
    <button onclick="resta()" class="btn btn-back">Retroceder</button>

  </div>
</div>

<!--Contenido Etica vial-->
<div id="miModal3" class="modal">
  <div class="modal-contenido">
    <a href="#">X</a>
    <h2>Etica vial </h2>
    <div class="temp">
      <h3>Etica vial</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique maxime eius iste sint, odio doloremque, quaerat quod et numquam laboriosam. Perspiciatis quam ipsa totam quae obcaecati ipsam amet ad.</p>
    </div>
    <div class="temp2">Segundo click</div>
    <div class="temp3">Tercer click</div>
  </div>
</div>

<!--Contenido técnicas de conducción-->
<div id="miModal4" class="modal">
  <div class="modal-contenido">
    <a href="#">X</a>
    <h2>Técnicas de conducción</h2>
    <div class="temp">
      <h3>Técnias de conducción</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique maxime eius iste sint, odio doloremque, quaerat quod et numquam laboriosam. Perspiciatis quam ipsa totam quae obcaecati ipsam amet ad.</p>
    </div>
    <div class="temp2">Segundo click</div>
    <div class="temp3">Tercer click</div>
  </div>
</div>

<!--Contenido Mecánica-->
<div id="miModal5" class="modal">
  <div class="modal-contenido">
    <a href="#">X</a>
    <h2>Mecánica</h2>
    <div class="temp">
      <h3>Mecánica</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique maxime eius iste sint, odio doloremque, quaerat quod et numquam laboriosam. Perspiciatis quam ipsa totam quae obcaecati ipsam amet ad.</p>
    </div>
    <div class="temp2">Segundo click</div>
    <div class="temp3">Tercer click</div>
  </div>
</div>
</body>

</html>
<script src="../js/modals.js"></script>
<!-- <script src="../js/modal2.js"></script> -->
<script src="../js/app.js"></script>