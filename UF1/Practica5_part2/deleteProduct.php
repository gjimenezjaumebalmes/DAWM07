<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="deleteProduct.php" method="POST">
                    <div class=form-group>
                        <input type="text" name="Name" class="form-control" placeholder="Name" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="delete_product" value="- Producte">
                </form>
            </div>
        </div>
    </div>
</div>
<?php

try {
    //Connexió a la BBDD
    $myCon = new PDO('mysql:host=localhost:3336; dbname=products', 'root', '');
    //Creem la consulta sql
    $sql ="SELECT * FROM product";

} catch (PDOException $e) {
    echo "error de connexió: " . $e->getMessage() . "<br/>";
    die();
}
isset($_POST["Name"]);
$name = $_POST['Name'];

$sql = "DELETE FROM product WHERE ($name)";
// Consulta sobre la consulta
$products = $myCon->query($sql);
foreach ($products as $i => $product);




?>
