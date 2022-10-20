<?php

include 'db_connection_pdo.php';

$productSaved = FALSE;

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

        $statement = $connexion->prepare($sql);


        $statement->bind_param('sis', $productName, $productDescription,$productPrice, $productQuantity);


        $statement->execute();


        $lastInsertId = $connexion->insert_id;


        $statement->close();

        $productSaved = TRUE;

    }
}
?>

