<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $contrasena = password_hash($_POST["contrasena"], PASSWORD_DEFAULT); // Encripta la contraseña
    
    // Conectar a la base de datos y realizar la inserción
    // $conn = mysqli_connect("localhost", "usuario", "contrasena", "basededatos");
    // $query = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$nombre', '$email', '$contrasena')";
    // mysqli_query($conn, $query);
    // mysqli_close($conn);
    
    echo "Registro exitoso. ¡Bienvenido, $nombre!";
}
?>
