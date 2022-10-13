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


/* ejemplo de una consulta */

$var_consulta= "select * from products";
$var_resultado = $con->query($var_consulta);

if($var_resultado->num_rows>0)
{
    echo"<table border='1' align='center'>
         <tr bgcolor='#E6E6E6'>
            <th>Campo1</th>
            <th>Campo2</th>
            <th>Campo3</th>
        </tr>";

    while ($var_fila=$var_resultado->fetch_array())
    {
        echo "<tr>
        <td>".$var_fila["Name"]."</td>";
        echo "<td>".$var_fila["Description"]."</td>";
        echo "<td>".$var_fila["price"]."</td>";
    }
}
else
{
    echo "No hay Registros";
}

mysqli_close($con);

?>