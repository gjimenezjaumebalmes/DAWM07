<?php

$servername = "localhost"; // Nombre/IP del servidor
$database = "products"; // Nombre de la BBDD
$username = "root"; // Nombre del usuario
$password = ""; // Contraseña del usuario

// Creamos la conexión
$connexion = mysqli_connect($servername, $username, $password, $database);

// Comprobamos la conexión
if (!$connexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
echo "Conexión satisfactoria";

?>
