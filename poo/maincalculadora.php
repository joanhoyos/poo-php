<?php 


require_once ("calculadora.php");

$Calculadora1 = new Calculadora();

$Calculadora1->suma(5, 9);
$Calculadora1->resta(18, 2);
$Calculadora1->multiplicacion(5, 10);
$Calculadora1->division(100, 5);

$Calculadora2 = new Calculadora();

$Calculadora2->suma(20, 60);
$Calculadora2->resta(20, 7);
$Calculadora2->multiplicacion(100, 55);
$Calculadora2->division(600, 7);

?>