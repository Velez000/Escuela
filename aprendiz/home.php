<?php
include('../aprendiz/base.php');
?>

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
    <button class="buttom buttom-open2">Ver contenido</button>

    <script src="../js/index.js"></script>
  </div>

  <div class="my-courses course-4">
    <h2 class="h2">Curso Montacargas</h2>
    <img class="img-course" src="../images/montacargs.svg" alt="Curso-de-montacargas.svg" />
    <button class="buttom buttom-open2">Ver contenido</button>
  </div>
</div>

<!-- Contenido de los cursos-->

<div class="contentA2">
  <section class="sectionA2">
    <h1 class="title-content">Contenido del curso A2</h1>
    <button class="buttom buttom2">X</button>
  </section>
  <div class="modules module-1">
    <h2>Adaptación al medio</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus esse, unde corrupti autem dolorem vero doloremque illum deserunt nam voluptatibus, libero magnam. Dignissimos possimus quidem fuga, debitis ipsa recusandae inventore. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi voluptate nulla minus distinctio ea provident ratione, laborum labore perferendis impedit, amet perspiciatis aperiam dolorum repellat, illo molestias cupiditate vero. Voluptatem.</p>
    <a href="#miModal" class="link-content">Ver contenido</a>
  </div>

  <div class="modules module-2">
    <h2>Marco legal</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus esse, unde corrupti autem dolorem vero doloremque illum deserunt nam voluptatibus, libero magnam. Dignissimos possimus quidem fuga, debitis ipsa recusandae inventore. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi voluptate nulla minus distinctio ea provident ratione, laborum labore perferendis impedit, amet perspiciatis aperiam dolorum repellat, illo molestias cupiditate vero. Voluptatem.</p>
    <a href="#miModal" class="link-content">Ver contenido</a>
  </div>

  <div class="modules module-3">
    <h2>Etica vial</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus esse, unde corrupti autem dolorem vero doloremque illum deserunt nam voluptatibus, libero magnam. Dignissimos possimus quidem fuga, debitis ipsa recusandae inventore. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi voluptate nulla minus distinctio ea provident ratione, laborum labore perferendis impedit, amet perspiciatis aperiam dolorum repellat, illo molestias cupiditate vero. Voluptatem.</p>
    <a href="#miModal" class="link-content">Ver contenido</a>
  </div>

  <div class="modules module-4">
    <h2>Técnicas de conducción</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus esse, unde corrupti autem dolorem vero doloremque illum deserunt nam voluptatibus, libero magnam. Dignissimos possimus quidem fuga, debitis ipsa recusandae inventore. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi voluptate nulla minus distinctio ea provident ratione, laborum labore perferendis impedit, amet perspiciatis aperiam dolorum repellat, illo molestias cupiditate vero. Voluptatem.</p>
    <a href="#miModal" class="link-content">Ver contenido</a>
  </div>

  <div class="modules module-5">
    <h2>Mecánica</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus esse, unde corrupti autem dolorem vero doloremque illum deserunt nam voluptatibus, libero magnam. Dignissimos possimus quidem fuga, debitis ipsa recusandae inventore. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi voluptate nulla minus distinctio ea provident ratione, laborum labore perferendis impedit, amet perspiciatis aperiam dolorum repellat, illo molestias cupiditate vero. Voluptatem.</p>
    <a href="#miModal" class="link-content">Ver contenido</a>
  </div>
</div>

<!--Contenido Adaptación-->
<div id="miModal" class="modal">
  <div class="modal-contenido">
    <a href="#" class="buttom-close-modal">X</a>
    <h2 class="subtitle">Adaptación al medio</h2>
    <div class="tlp temp1">
      <h3>Adaptación al medio 1</h3>
      <h4>Tránsito de vehículos</h4>
      <p>Deben transitar obligatoriamente, por sus respectivos carriles, dentro
las líneas de demarcación y atravesarlos solamente para efectuar maniobras de
adelantamiento. Para efectuar dicha maniobra, el conductor debe anunciar su intención por
medio de las luces direccionales con el fin de poner en peligro a los demás vehículos o
peatones.</p>
    </div>
    <div class="tlp temp2">
      <h2>Utilización de los carriles</h2>
      <p>los vehículos transitaran en, vía de sentido único de tránsito y vías
de doble sentido de tránsito. La primera comprende, aquellas vías con velocidad reglamentada
para sus carriles. La segunda, la compone: 2 carriles; por el carril de su derecha y utilizar con
precaución el de la izquierda para maniobras de adelanto y respetar la señalización
correspondiente. 3 carriles; los vehículos transitan por los carriles extremos que queden a su
derecha y el carril central solo se utilizará en el sentido que señale la autoridad competente. 4
carriles; los carriles exteriores se utilizarán para el tránsito ordinario de vehículos, y los interiores
para maniobras de adelantamiento o circulación a mayor velocidad dentro de los límites
establecidos.
</p>
    </div>
    <div class="tlp temp3">
      <h2>Retroceso en las vías públicas</h2>
      <p>No se puede realizar maniobras de retroceso en vías públicas,
salvo en casos de estacionamiento o emergencias. Además, los vehículos no deben transitar
sobre la aceras o zonas de seguridad o salvo en caso de entrada de garajes o lugares de
estacionamiento.</p>
    </div>
    <div class="tlp temp4">
      <h2>Accidentalidad en Colombia </h2>
      <p>De acuerdo a las proyecciones de la cifra de fallecidos por accidentes de tránsito realizadas por el
Observatorio Nacional de Seguridad Vial (ONSV), se estima que entre el 1 de diciembre de 2019 y el 7 de enero de 2020 podrían ocurrir alrededor de 840 fallecimientos en el territorio nacional. En
2018 se presentaron 854 casos y en 2017 fueron 851. Asimismo, aproximadamente el 10% del
total de fallecidos por siniestros viales cada año está relacionado con tres conductas de riesgo
principales: exceso de velocidad, consumo de bebidas alcohólicas y conducción, y el irrespeto a
las señales de tránsito.</p>
    </div>
    <div class="tlp temp5">
    <p>Los actores principales con mayor riesgo de mortalidad es el motociclista, este con una
participación del 44%, el peatón con un 27%, el usuario de automóvil con un 8% y el ciclista con
un 8% cifras proyectadas por el ONSV. Del mismo modo que, el departamento de Antioquia
presenta mayor participación de fallecidos con un 13,96%. </p>
<p>El Ministerio de Salud y Protección Social en conjunto con el Ministerio de Transporte, adelantan
acciones con el objeto de prevenir y reducir el número de lesionados y fallecidos ocasionados por
accidentes de tránsito. </p>
    </div>
    <button onclick="incrementClick()" class="next-content">Siguiente</button>
    <button onclick="decrementClick()" class="next-content2">atras</button>
    <script src="../js/modals.js"></script>

  </div>
</div>

<!--Contenido Marco legal-->
<div id="miModal" class="modal">
  <div class="modal-contenido">
    <a href="#">X</a>
    <h2>Marco legal</h2>
    <div class="temp">
      <h3>Marco legal</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique maxime eius iste sint, odio doloremque, quaerat quod et numquam laboriosam. Perspiciatis quam ipsa totam quae obcaecati ipsam amet ad.</p>
    </div>
    <div class="temp2">Segundo click</div>
    <div class="temp3">Tercer click</div>
  </div>
</div>

<!--Contenido Etica vial-->
<div id="miModal" class="modal">
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
<div id="miModal" class="modal">
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
<div id="miModal" class="modal">
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
<script src="../js/app.js"></script>
<script src="../js/index.js"></script>