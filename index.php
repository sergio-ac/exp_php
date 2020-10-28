<!DOCTYPE html>
<html lang="es">
    <head>
        <!--Hace que los caracteres raros sean legibles-->
        <meta charset="UTF-8">
        <!--//sirve para internet explorer-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--//hace que el ancho de la pagina se adapte a la pantalla del disp.-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Araths Baby Blog</title>

    </head>

    <body>
        <?php echo "Hola mundo php"; ?>

        <form action="procesar.php" method="post">
        <p>Nombre: <input type="text" name="nombre" size="40"></p>
        <p>Año de nacimiento: <input type="number" name="año" min="1900"></p>
        
        <p>Correo: <input type="text" name="correo" size="40"></p>
        <p>Contraseña: <input type="text" name="contraseña" size="40"></p>
        <p>Confirmar Contraseña: <input type="text" name="contraseña_confirm" size="40"></p>
        <p>Sexo:
        <input type="radio" name="sexo" value="h"> Hombre
        <input type="radio" name="sexo" value="m"> Mujer
        </p>
        <p>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
        </p>
        </form>

    </body>

</html>






