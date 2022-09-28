<?php 


class Calculadora 
{

	public function suma($numero1,$numero2)
	{
		$suma = $numero1 + $numero2;
		echo "la suma es: ". $suma . "<br>";
	} 

	public function resta($numero1,$numero2)
	{
		$resta = $numero1 + $numero2;
		echo "la resta es: ". $resta . "<br>";
	} 

	public function multiplicacion($numero1,$numero2){
		$multiplicacion = $numero1 * $numero2;
		echo "la multiplicacion es: ". $multiplicacion . "<br>";
	}

	public function division($numero1,$numero2){
		$division = $numero1 + $numero2;
		echo "la division es: ". $division . "<br>";
	} 
}
?>
