<?php
/*
Define variables de distintos tipos: un entero, un flotante, una cadena y un
booleano. Luego imprime el valor y tipo de cada variable utilizando la función
var_dump().


Crea un array asociativo que contenga información de una persona (nombre,
edad, ciudad).

 Define una constante llamada NOMBRE_CURSO con el valor "Programación
PHP" y muestra su valor en pantalla.
 Crea una función que reciba un array de números y devuelva la suma de
todos sus elementos. Llámala con un array de ejemplo y muestra el
resultado.
 Declara una variable con el valor null y utiliza la función is_null() para
verificar si la variable tiene valor null.*/

$nombre="Paco";
$apellido1="Garcia";
$apellido2="Partida";
$edad=46;
$altura=1.80;
$soltero=false;



var_dump($nombre,$apellido1,$apellido2,$edad,$altura);

//hacemos lo mismo de antes pero en una tabla
$aPersona=["nombre"=> "Paco","edad"=>46,"ciudad"=>"Sevilla"];
var_dump($aPersona);

//definir constante
define("NOMBRE_CURSO","Curso de PHP");
echo "NOMBRE_CURSO";

//creamos una variable NULL
$tipoNull=NULL;
//comprobamos si una variable es nula
if(is_null($tipoNull)){
    echo "es nulo";
}

//operaciones aritmeticas
$numero1=15;
$numero2=16;
$resultado=$numero1+$numero2;
echo $resultado;

//meter una variable en una cadena
echo "El resultado es $resultado";
?>
<br></br>
<?php


$a=10;
$b=3;
//le suma a la variable anterior con ese nombre
$a+=5;
$resultado2=$a+$b;
echo $resultado2;


//comprobar si dos variable son inguales
if($a==$b){
    echo "Es igual";

}else{
    echo "Es diferente";
}

//ternarios
$edad = 18;
$esMayor = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
echo $esMayor; // Imprime "Mayor de edad"
//Esto seria igual que escribir:
if($esMayor>=18){
    echo "Mayor de edad";
}else{
    echo "Menor de edad";
}

echo "<br></br>";echo "<br></br>";echo "<br></br>";

/*Defina dos variables con valores numéricos y realice operaciones aritméticas
básicas (suma, resta, multiplicación, división, módulo).*/
$numero1=25;
$numero2=5;
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$producto=$numero1*$numero2;
$division=$numero1/$numero2;
$modulo=$numero1%$numero2;
echo "$suma  $resta  $producto  $division  $modulo";
?>

<?php
/*Use operadores de comparación para verificar si una variable es mayor,
menor o igual que la otra.*/

$c=10;
$d=20;

echo $c==$d;

?>










?>
