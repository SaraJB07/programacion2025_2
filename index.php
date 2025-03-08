<?php
echo "Hola Mundo";
echo '<br>';
echo "Hola Mundo!!!";

$nombre = 'Pepe';
$apellido = 'Gomez';
echo '<br> Hola '.$nombre . ' ' . $apellido; 
echo "<br>Hola $nombre $apellido";
$edad = 25;
$estatura =1.75;
$mayorEdad = true; //false

$prueba = null;
$prueba = array(1,2,3,4,5,6);
$prueba = [[], 2, 3, true, 5, "a"];
//$prueba= "Pepe";
echo '<br>'.$prueba[2];

$persona = [
    "nombre" => "Pepe",
    "apellido" => "Gomez",
    "edad" => 30,
    "numerosSuerte" => [20,12,6],
];

echo '<br>' . $persona['nombre'];
echo "<br> $nombre";

?>