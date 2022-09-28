<?php



class Persona  
{
	
	private $nombre;
	private $edad;
	private $altura;
	private $genero;

	public function _Construct ()
	{
		$nombre = "andres";
		$edad = 35;
		$altura = 1.77;
		$genero = "masculino";
	}

	
	public function caminar ()
	{
		echo "estoy caminando";
	}

	public function jugar ()
	{
		echo "estoy jugando";
	}

	public function hablar ()
	{
		echo "estoy hablando";
	}

	


	

}



echo ("POO programacion orientada a objetos con php");

?>