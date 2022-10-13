<html>
<body >
<div align="center">
    <h1>MOSTRAR DATOS</h1>
    <a href="update.php"><button>ACTUALIZAR</button></a>
    <a href="insert.php"><button>INSERTAR</button></a>
    <p></p>

    <?php

    include ("conexion.php");

    /* ejemplo de una consulta */

    $consulta= "select * from products";
    $resultado = mysqli_query($connexion,$consulta);

    if($resultado->num_rows>0)
    {
        echo"<table border='1' align='center'>
    <tr bgcolor='#E6E6E6'>
        <th>Campo1</th>
        <th>Campo2</th>
        <th>Campo3</th>
    </tr>";

        while ($fila=$resultado->fetch_array())
        {
            echo "<tr>
        <td>".$fila["Name"]."</td>";
            echo "<td>".$fila["Description"]."</td>";
            echo "<td>".$fila["price"]."</td>";
        }
    }
    else
    {
        echo "No hay Registros";
    }
    ?>
</div>
</body>
</html>

