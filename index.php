<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles-dist.css">
    <title>Login</title>
</head>
<body>
    <form action="php/login.php" id="form-primary" method="POST">
        <div class="div-login">
            <img src="images/Logo-conduzcamos.png" alt="Logo-conduzcamos.png" class="logotype">
            <label for="select-user" class="label-information-basic">Tipo de usuario</label>
            <select name="select-user" class="select-user" id="select-user" required>
                <option value="Administrador" class="option">Administrador</option>
                <option value="Aprendiz" class="option">Aprendiz</option>
            </select>
            <label for="email" class="label-information-basic">Correo</label>
            <input type="text" class="class-email" name="email" id="email" placeholder="e-mail" pattern="[A-Za-z=-9_-@-.]{6-16}" required/>
            <label for="password" class="label-information-basic">Contraseña</label>
            <input type="password" name="password" id="password" class="password" placeholder="Contraseña" required/>
            <a class="reset" href="php/restore.php">¿Olvidó su contraseña?</a>
            <input type="submit" value="Ingresar" class="enter">
        </div>
        <div class="class-error"></div>
        <div class="class-correct"></div>
    </form>
</body>
</html>