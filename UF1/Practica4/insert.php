<html>
<body>

<?php

$servername = "localhost"; // Nombre/IP del servidor
$database = "products"; // Nombre de la BBDD
$username = "root"; // Nombre del usuario
$password = ""; // Contraseña del usuario
// Creamos la conexión
$con = mysqli_connect($servername, $username, $password, $database);
// Comprobamos la conexión
if (!$con) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
//echo "Conexión satisfactoria";

?>

<form action="insert.php" method="post">
    Name: <input type="text" name="Name"><br>
    Description: <input type="text" name="Description"><br>
    price: <input type="text" name="price"><br>
    <input type="submit" value="Enviar">
</form>

<?php isset($_POST["Name"]) ? print $_POST["Name"] : ""; ?><br>
<?php isset($_POST["Description"]) ? print $_POST["Description"] : ""; ?><br>
<?php isset($_POST["price"]) ? print $_POST["price"] : ""; ?><br>

<?

$the_name = $_POST['name'];
$the_description = $_POST['description'];
$the_price = $_POST['price'];

$query = "INSERT INTO `products` `products` (`Name`, `Description`,`price`) VALUES ('$the_name', '$the_description', '$the_price'); ";

mysqli_query($query);

mysqli_close($con);
?>

</body>
</html>