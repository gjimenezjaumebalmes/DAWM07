<html>
<header>

    <Title>Practica 1</Title>
     <meta charset="utf-8">

</header>
<body>

	$nombre = "Guillem" ;
	$apellidos = "Jimenez Agullo" ;
	$edat = 23 ;
	$date = date("05/28/1992")	;
	$telefono = 505403030;
	$postal = "Calle valencia 404" ;
	$email = "gjimenez@jaumebalmes.net" ;
	$trabaja = True ;
	$altura = 1.70 ;


  
  <h1><php>echo "Los datos de " $nombre $apellidos;</php></h1>
  <h3><php>echo "Los datos de " $nombre "son:";</php></h3>
 <ul>
  <li><br><php>echo "Se llama "  $nombre;</php></li>
  <li><br><php>echo "Sus apellidos son "  $apellidos;</php></li>
  <li><br><php>echo "Tiene "  $edat;</php></li>
  <li><br><php>echo "Nacio: "  $date;</php></li>
  <li><br><php>echo "Su telefono es "  $telefono;</php></li>
  <li><br><php>echo "Vive en "  $postal;</php></li>
  <li><br><php>echo "Su email es "  $email;</php></li>
<php>if ($a = True) {
    echo "Trabaja";
} else {
    echo "No trabaja";
}
</php>
  <php><li><br>echo "Su altura es"  $altura;</php></li>
</ul>


</body>
</html>