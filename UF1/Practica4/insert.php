<html>


<body>

<div align="center">
    <a href="update.php"><button>ACTUALIZAR</button></a>
    <a href="show.php"><button>MOSTRAR DATOS</button></a>
    <p></p>
</div>

<?php

include ("conexion.php");

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

<?php
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

//$query = 'INSERT INTO products (´Name´, ´Description`,`price`) VALUES ('$name', '$description', '$price')';
//$query = 'INSERT INTO products (Name, Description, price) VALUES ($name, $description, $price)';
//$result = mysqli_query($con,$query);

$result=mysqli_query("INSERT INTO products  (Name,Description,price) VALUES ($name,$description,$price) ",$con);

if(mysqli_query($result)){

    echo "Se ha insertado";

}else{

    echo "No se ha insertado". mysqli_error($con);

}
mysqli_close($con);
?>

</body>
</html>