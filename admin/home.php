<?php
  // Llamamos al fichero base_admi para incluir el menu
  include('base_admi.php');
?>
 <!-- En el inicio tiene el formulario para el registro de nuevos aprendices o estudiantes -->
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
          <input type="email" id="label-count" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="label-count" class="input-register">
        </div>
        <div class="div-specific">
          <label for="label-id" class="labels">Documento</label>
          <input type="number" id="label-id" name="label-id" class="input-register">
          <label for="label-birth" class="labels">Fecha de nacimiento</label>
          <input type="date" id="label-birth" name="label-birth" class="input-register">
          <label for="label-contact" class="labels">Telefono</label>
          <input type="tel" id="label-contact" name="label-contact" class="input-register">
          <label for="label-passwd-1" class="labels">Contraseña</label>
          <input type="password" id="label-passwd-1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="label-passwd-1" class="input-register">
          <label for="label-passwd-2" class="labels">Confirmar contraseña</label>
          <input type="password" id="label-passwd-2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="label-passwd-2" class="input-register">
          <div class="select-courses">
          <label for="checka2" class="labels2"><input type="checkbox" name="checkbox1" id="checka2" value="A2">Curso A2</label>
          <label for="checkb1" class="labels2"><input type="checkbox" name="checkbox2" id="checkb1" value="B1">Curso B1</label>
          <label for="checkc1" class="labels2"><input type="checkbox" name="checkbox3" id="checkc1" value="C1">Curso C1</label>
          <label for="checkmtc" class="labels2"><input type="checkbox" name="checkbox4" id="checkmtc" value="Montacargas">Curso Montacargas</label>
        
          </div>

        </div>
        <!-- Se envia la informacion al archivo register (no es importante el .php debido a que utilizamos .htaccess) -->
        <button type="submit" class="buttom-go" name="register" value="register">Registrar</button>

      </div>
    </form>
  </div>
</body>

</html>