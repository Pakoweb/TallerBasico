<!DOCTYPE html>
<html>
<head>
<title>Ejemplo PHP</title>
</head>
<body>
<h1>Página generada con PHP</h1>
<?php
echo "<p>Hoy es " . date("d/m/Y") . "</p>"; //con . se concatenan las cadenas
//<hr> pinta una linea
echo "<hr>";

$x = 5;
$y = 23;
$resultado= $x + $y;
echo $resultado;

echo "<br></br>"; // la etiqueta <br> hace un salto de pagina
$nombre= "Paco";
echo $nombre;




?>
</body>
</html>