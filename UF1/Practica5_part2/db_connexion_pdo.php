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