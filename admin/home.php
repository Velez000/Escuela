
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
          placeholder="Nombre Administrador"
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
          <a class="link-menu" href="#">Inicio</a>
        </li>
        <li class="item">
          <a class="link-menu" href="#">Calificaciones</a>
        </li>
        <li class="item">
          <a class="link-menu" href="#">Datos</a>
        </li>
        <li class="item">
          <a class="link-menu" href="../index.html">Cerrar sesion</a>
        </li>
      </ul>
    </div>
    <div class="div-controll">
        <form action="#">
            <div class="div-register">
                <h1 class="h1">Registro Aprendiz</h1>
                <p class="class-ad">Por favor llenar todos los campos correctamente</p>
                <div class="div-general">
                    <label for="label-firstname" class="labels">Primer nombre</label>
                    <input type="text" id="label-firstname" class="input-register">
                    <label for="label-secondname" class="labels">Segundo nombe</label>
                    <input type="text" id="label-secondname" class="input-register">
                    <label for="label-lastname-1" class="labels">Primer apellido</label>
                    <input type="text" id="label-lastname-1" class="input-register">
                    <label for="label-lastname-2" class="labels">Segundo apellido</label>
                    <input type="text" id="label-lastname-2" class="input-register">
                    <label for="label-count" class="labels">Correo</label>
                    <input type="email" id="label-count" class="input-register">
                </div>
                <div class="div-specific">
                <label for="label-id" class="labels">Documento</label>
                <input type="number" id="label-id" class="input-register">
                <label for="label-birth" class="labels">Fecha de nacimiento</label>
                <input type="date" id="label-birth" class="input-register">
                <label for="label-contact" class="labels">Telefono</label>
                <input type="tel" id="label-contact" class="input-register">
                <label for="label-passwd-1" class="labels">Contraseña</label>
                <input type="password" id="label-passwd-1" class="input-register">
                <label for="label-passwd-2" class="labels">Confirmar contraseña</label>
                <input type="password" id="label-passwd-2" class="input-register">
                </div>
    
                <input type="submit" class="buttom-go" value="Registrar">
    
            </div>
        </form>
    </div>
  </body>
</html>
