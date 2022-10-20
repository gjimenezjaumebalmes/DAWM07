<?php
//db
try {
    //Connexió a la BBDD
    $myCon = new PDO('mysql:host=localhost:3336; dbname=products', 'test', 'test');
    //Creem la consulta sql
    $sql ="SELECT * FROM product";

} catch (PDOException $e) {
    echo "error de connexió: " . $e->getMessage() . "<br/>";
    die();
}

?>

<!--<table class="table">-->
<!--    <thead>-->
<!--    <tr>-->
<!---->
<!--        <th scope="col">#</th>-->
<!--        <th scope="col">NumID</th>-->
<!--        <th scope="col">Name</th>-->
<!--        <th scope="col">Description</th>-->
<!--        <th scope="col">Price</th>-->
<!--        <th scope="col">Quantity</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    //S’envia la query a la BBDD i es guarda la informació a product-->
<!--    --><?php //foreach ($myCon->query($sql) as $i => $product){ ?>
<!--        <tr>-->
<!--            <th scope="row">--><?php //echo $i +1 ?><!--</th> <!-- augmentem el index i -->-->
<!--            <td>--><?php //echo $product['NumID'] ?><!--</td> <!--Accedim a NumID -->-->
<!--            <td>--><?php //echo $product['Name'] ?><!--</td> <!--Accedim a Name-->-->
<!--            <td>--><?php //echo $product['Description'] ?><!--</td> <!--Accedim a Description-->-->
<!--            <td>--><?php //echo $product['Price'] ?><!--</td> <!--Accedim a Price -->-->
<!--            <td>--><?php //echo $product['Quantity'] ?><!--</td> <!--Accedim a Quantity -->-->
<!--            <td><a href="edit.php?id=--><?php //echo $product['NumID']?><!--"><button type="button" class="btn btn-outline-primary">Edit</button></a></td>-->
<!--            <td><a href="deleteProduct.php?id=--><?php //echo $product['NumID']?><!--"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>-->
<!--        </tr>-->
<!--    --><?php //} ?>
<!--    </tbody>-->
<!--</table>-->



