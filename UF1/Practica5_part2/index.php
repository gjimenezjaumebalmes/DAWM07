<?php
//db
try {
    //Connexió a la BBDD
    $myCon = new PDO('mysql:host=localhost:3336; dbname=products', 'root', '');
    //Creem la consulta sql
    $sql ="SELECT * FROM product";

} catch (PDOException $e) {
    echo "error de connexió: " . $e->getMessage() . "<br/>";
    die();
}

?>

<table class="table">
    <thead>
    <tr>

        <th scope="col">#</th>
        <th scope="col">NumID</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
    </tr>
    </thead>
    <tbody>
    //S’envia la query a la BBDD i es guarda la informació a product

    </tbody>
</table>

<!-- SECCIÓ PER AFEGIR PRODUCTES -->
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <!-- A través del mètode POST li enviem les dades del formulari a l'arxiu add_product.php -->
                <form action="add_product.php" method="POST">
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
<br>
<a href="deleteProduct.php"><b>eliminar producto</b></a>
