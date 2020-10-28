<?php
$nombre = $_POST['nombre'];
$año = $_POST['año'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$contraseña_confirm = $_POST['contraseña_confirm'];
$sexo = $_POST['sexo'];

echo "<h2> Los datos recibidos por el formulario son: </h2>";
echo "El nombre es: " . $nombre . "<br/>";
echo "El año de nacimiento es: ".$año."<br/>";
echo "El correo recibido es: ".$correo."<br/>";
echo "La contraseña recibida es: ".$contraseña."<br/>";
echo "La confirmacion es: ".$contraseña_confirm."<br/>";
if ($sexo=="h"){
    echo "El sexo del sujeto es: Hombre <br/>";

}if($sexo=="m"){
    echo "El sexo del sujeto es: Mujer <br/>";
}



?>