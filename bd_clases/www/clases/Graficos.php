<?php
	include("BD.php");
	$new_obj= new BD;
	/**
	* Crea una nueva clase y hereda la clase BD.
	*/
	class Graficos extends BD
	{
		function Graficos()
		{
		}

		/**
		* Imprime titulo con estilo.
		*/
		function imprimir_titulo($t)
		{
			$titulo ="<center>";
				$titulo	.= "<h1>";
					$titulo .="$t";
				$titulo .="</h1>";
			$titulo .="</center>";	

			return $titulo."<p>";
		}

		function escribir($sql,$num=null, $color)
		{
			$r=$this->retornar_usuarios($sql);
			while ($fila = mysqli_fetch_array($r)) 
			{
				$num_fil= mysqli_num_rows($r);
				$num_colum=mysqli_num_fields($r);
				echo "<center>";
					echo "<table style='background-color:$color; font-family:arial'>";
						for ($i=0; $i < $num_colum; $i++) 
						{
							echo "<td style='border:outset; text-align:center; width:150px'>".$fila[$i]."</td>";
						}
						
					echo "</table>";
				echo "</center>";
				echo "<p>";
			}
		}
	}
?>
<div style="font-family:    "></div>