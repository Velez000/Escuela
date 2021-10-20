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
      <img src="../images/vehiculos_00001.svg" alt="Vehiculos en la ciudad" class="tlp-img">
    </div>
    <div class="tlp temp2">
      <h4>Utilización de los carriles</h4>
      <p>Los vehículos transitaran en, vía de sentido único de tránsito y vías
        de doble sentido de tránsito. La primera comprende, aquellas vías con velocidad reglamentada
        para sus carriles. La segunda, la compone: 2 carriles; por el carril de su derecha y utilizar con
        precaución el de la izquierda para maniobras de adelanto y respetar la señalización
        correspondiente.
      </p>
      <img src="../images/carriles.svg" alt="Vehiculos en la ciudad" class="tlp-img">
    </div>
    <div class="tlp temp3">
      <h4>Retroceso en las vías públicas</h4>
      <p>No se puede realizar maniobras de retroceso en vías públicas,
        salvo en casos de estacionamiento o emergencias. Además, los vehículos no deben transitar
        sobre la aceras o zonas de seguridad o salvo en caso de entrada de garajes o lugares de
        estacionamiento.</p>
      <img src="../images/parqueadero.svg" alt="estacionamiento.svg" class="tlp-img1">
      <img src="../images/retrocedo-vias1.svg" alt="accidente.svg" class="tlp-img2">
    </div>
    <div class="tlp temp4">
      <h4>Accidentalidad en Colombia </h4>
      <p>No se puede realizar maniobras de retroceso en vías públicas,
        salvo en casos de estacionamiento o emergencias. Además, los vehículos no deben transitar
        sobre la aceras o zonas de seguridad o salvo en caso de entrada de garajes o lugares de
        estacionamiento.</p>
      <img src="../images/accidentabilidad.svg" alt="accidentabilidad.svg" class="tlp-img">
    </div>
    <div class="tlp temp5">
      <p>Los actores principales con mayor riesgo de mortalidad es el motociclista, este con una
        participación del 44%, el peatón con un 27%, el usuario de automóvil con un 8% y el ciclista con
        un 8% cifras proyectadas por el ONSV. Del mismo modo que, el departamento de Antioquia
        presenta mayor participación de fallecidos con un 13,96%. </p>

      <img src="../images/accidente_1.svg" alt="accidente.svg" class="tlp-img">
    </div>
    <button onclick="incrementClick()" class="btn btn-next">Siguiente</button>
    <button onclick="decrementClick()" class="btn btn-back">Retroceder</button>
    <script src="../js/modals.js"></script>
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
<script src="../js/app.js"></script>
