<?php
include('../aprendiz/base.php');
?>

<div class="courses">

  <div class="my-courses course-1">
    <h2 class="h2">Curso A2</h2>
    <img class="img-course" src="../images/conduccion-A2.svg" alt="Curso-de-motos.svg" />
    <button class="buttom buttom-open">Ver contenido</button>
    <!-- Contenido del A2-->
    <!--Fin del contenido-->
  </div>

  <div class="my-courses course-2">
    <h2 class="h2">Curso B1</h2>
    <img class="img-course"  src="../images/conduccion-B1.svg" alt="Curso-de-vehiculos-particulares.svg" />
    <button class="buttom buttom-open2">Ver contenido</button>

  </div>

  <div class="my-courses course-3">
    <h2 class="h2">Curso C1</h2>
    <img class="img-course"  src="../images/conduccion-C1.svg" alt="Curso-de-vehiculos-publicos.svg" />
    <button class="buttom buttom-open2">Ver contenido</button>

    <script src="../js/index.js"></script>
  </div>

  <div class="my-courses course-4">
    <h2 class="h2">Curso Montacargas</h2>
    <img class="img-course"  src="../images/montacargs.svg" alt="Curso-de-montacargas.svg" />
    <button class="buttom buttom-open2">Ver contenido</button>
  </div>
</div>

<!-- Contenido de los cursos-->

<div class="contentA2">
  <section class="sectionA2">
    <h1 class="title-content">Contenido del curso A2</h1>
    <button class="buttom buttom2">X</button>
  </section>
  <div class="module-1">
    <h2>Adaptación al medio</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus esse, unde corrupti autem dolorem vero doloremque illum deserunt nam voluptatibus, libero magnam. Dignissimos possimus quidem fuga, debitis ipsa recusandae inventore. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi voluptate nulla minus distinctio ea provident ratione, laborum labore perferendis impedit, amet perspiciatis aperiam dolorum repellat, illo molestias cupiditate vero. Voluptatem.</p>
    <a href="#miModal" class="link-content">Ver contenido</a>
  </div>
</div>
<div id="miModal" class="modal">
  <div class="modal-contenido">
    <a href="#">X</a>
    <h2>Adaptación al medio</h2>
    <div class="temp">
      <h3>Adaptación al medio 1</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique maxime eius iste sint, odio doloremque, quaerat quod et numquam laboriosam. Perspiciatis quam ipsa totam quae obcaecati ipsam amet ad.</p>
    </div>
    <div class="temp2">Segundo click</div>
    <div class="temp3">Tercer click</div>
    <button onclick="incrementClick()"></button>
    <script>
     var counterVal = 0;
      var uno = document.querySelector('.temp');
      var dos = document.querySelector('.temp2');
      var tres = document.querySelector('.temp3');
      uno.style.display = "none";
          dos.style.display = "none";
          tres.style.display = "none";
      function incrementClick() {
        updateDisplay(++counterVal);
    }

    function updateDisplay(val) {
        console.log(val);
        if(val == 1 ){
          uno.style.display = "Block";
          dos.style.display = "none";
          tres.style.display = "none";
      console.log("Se esconde el primero")
    }else if(val == 2){
      uno.style.display = "none";
          dos.style.display = "Block";
          tres.style.display = "none";
      console.log("se esconde el segundo")
    }
    else if(val == 3){
      uno.style.display = "none";
          dos.style.display = "none";
          tres.style.display = "Block";
      console.log("se esconde el tercero")
    }
    }

    </script>
  </div>  
</div>
</body>

</html>
<script src="../js/index.js"></script>