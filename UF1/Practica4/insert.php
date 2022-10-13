<html>


<body>

<div align="center">
    <a href="update.php"><button>ACTUALIZAR</button></a>
    <a href="conexion.php"><button>MOSTRAR DATOS</button></a>
    <p></p>
</div>

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
    <p>
    <input type="submit" value="Enviar">
</form>


<?php isset($_POST["Name"]) ? print $_POST["Name"] : ""; ?><br>
<?php isset($_POST["Description"]) ? print $_POST["Description"] : ""; ?><br>
<?php isset($_POST["price"]) ? print $_POST["price"] : ""; ?><br>

<?

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

//$query = 'INSERT INTO products (´Name´, ´Description`,`price`) VALUES ('$name', '$description', '$price')';
$query = 'INSERT INTO products (Name, Description, price) VALUES ('$name', '$description', '$price')';
$result = mysqli_query($con,$query);

if(mysqli_query($result)){

    echo "Se ha insertado";

}else{

    echo "No se ha insertado". mysqli_error($con);

}
mysqli_close($con);
?>

</body>
</html>