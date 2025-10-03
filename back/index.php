
<html> 
Taller de inicio de PHP

<br></br>

<?php

//Texto que se genera en servidor.Es codigo PHP,se ejecuta
//en el servidor de aplcaciones
echo "primera linea";

echo "segunda linea";

echo "tercera linea";

echo "Ultima linea";



?>


<br></br>
<?php

//Texto que se genera en servidor.Es codigo PHP,se ejecuta
//en el servidor de aplcaciones
echo "primera linea";

echo "segunda linea";

echo "tercera linea";

echo "Ultima linea";

echo date("d.m.y");
?>
<br></br>
<?php
define("PI",3.1416);
echo PI;

$nombre="Paco";
$nombre="Otro";
echo $nombre;
echo $nombre;

$frutas=["limon","pera","fresa"];
$personas=["nombre"=> "Juan","edad"=>30];

//Creacion de clases
class Persona{
    public $nombre;
    public $edad;
}

//Creacion de opbjeto nuevo
$oNombre=new Persona();
$oNombre->nombre="Juan";
$oNombre->edad=30;

//pinta objeto entero por pantalla
var_dump($oNombre);

var_dump($frutas);
?>

<br></br>



</html>