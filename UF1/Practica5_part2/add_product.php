<?php

try {
    //Connexió a la BBDD
    $myCon = new PDO('mysql:host=localhost; dbname=products', 'test', 'test');
    //Creem la consulta sql
    $sql ="SELECT * FROM product";

} catch (PDOException $e) {
    echo "error de connexió: " . $e->getMessage() . "<br/>";
    die();
}


if (isset($_POST['submit'])) {

    $productName = isset($_POST['name']) ? $_POST['name'] : '';
    $productDescription = isset($_POST['description']) ? $_POST['description'] : '';
    $productPrice = isset($_POST['price']) ? $_POST['price'] : 0;
    $productQuantity = isset($_POST['quantity']) ? $_POST['quantity'] : 0;


    /*
     * Validate posted values.
     */
    if (empty($productName)) {
        $errors[] = 'Please provide a product name.';
    }

    if (empty($productDescription)) {
        $errors[] = 'Please provide a description.';
    }

    if (empty($productPrice)) {
        $errors[] = 'Please provide a description.';
    }

    if ($productQuantity == 0) {
        $errors[] = 'Please provide the quantity.';
    }

    if (!isset($errors)) {

        $sql = 'INSERT INTO products (
                    name,
                    description,
                    price,
                    quantity
                ) VALUES (
                    ?, ?, ?,?
                )';


    }


}


$products=$myCon->query($sql);



?>



<!-- SECCIÓ PER AFEGIR PRODUCTES -->
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <!-- A través del mètode POST li enviem les dades del formulari a l'arxiu add_product.php -->
                <form action="" method="POST">
                    <div class=form-group>
                        <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
                    </div>
                    <div class=form-group>
                        <textarea name="description" rows="3" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <div class=form-group>
                        <input type="text" name="price" class="form-control" placeholder="price">
                    </div>
                    <div class=form-group>
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity">
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="add_product" value="+ Producte">
                </form>
            </div>
        </div>
    </div>
</div>
