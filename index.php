<!DOCTYPE html>
<html lang="es">
    <head>
        <!--Hace que los caracteres raros sean legibles-->
        <meta charset="UTF-8">
        <!--//sirve para internet explorer-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--//hace que el ancho de la pagina se adapte a la pantalla del disp.-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    <title>Formulario de Registro</title>
</head>
<body>
    <div class="container">
        <h2>Registro de Usuario</h2>
        <form action="registrar.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
            
            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>

</html>






