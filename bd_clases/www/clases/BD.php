<?php

	/**
	* Crea una nueva clase.
	*/
	class BD 
	{
		/*  declaramos las variables. */
		public $servidor;		
		public $usuario;		
		public $clave;			
		public $bd;				
		function BD ()
		{					
		}

		function ini()
		{
			include('config.php');
			$this->servidor = $servidor;
            $this->usuario  = $usuario;
            $this->clave    = $clave;   
            $this->bd       = $bd;
		}

		/**
		* Retorna fecha del sistema. 
		*/
		function retornar_fecha()
		{
			$fecha		=	date("Y-m-d");
			$conexion	=	mysqli_connect(); 
			return $fecha."<p>";
		}

		function conectar()
		{
			return mysqli_connect($this->servidor, $this->usuario, $this->clave, $this->bd );			
		}

		function retornar_usuarios($s)
		{	
			$conn = $this->conectar();
			$resultado= $conn->query($s);
			return $resultado;
		}

	}
?>