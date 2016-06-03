<?php
	
	echo insertar("tb_personas",[[12,"num_doc"],["rambo","nombres"],["travolta","apellidos"],["mesero","rol"],["masculino","genero"],["2016-01-01","fecha_registro"]]);

	/**
	* funcion insertar
	*/
	function insertar($tabla, $campos)
	{	/* imprimir campos */
		echo "<table border='solid' width='200'>";
		echo "<td >".$campos[0][0]."<td>".$campos[0][1]."<tr>";	echo "<td >".$campos[1][0]."<td>".$campos[1][1]."<tr>";
		echo "<td >".$campos[2][0]."<td>".$campos[2][1]."<tr>";	echo "<td >".$campos[3][0]."<td>".$campos[3][1]."<tr>";
		echo "<td >".$campos[4][0]."<td>".$campos[4][1]."<tr>";	echo "<td >".$campos[5][0]."<td>".$campos[5][1]."<tr>";
		echo "</table>";	echo "<p>";

		include('../config.php'); // llama config.php
		$sql="SELECT * FROM tb_personas WHERE 1 "; // consulta todo de la BD.
		$conn = mysqli_connect($servidor, $usuario, $clave, $bd); // conexión.
		$resultado = $conn->query($sql); // resultado de la conexión.

		$num_colum = mysqli_num_fields($resultado)-1; // cuenta las columnas.
		/* creamos la variables.*/
		$insert="";
		$columnas="";
		
		for ($i=0; $i < $num_colum; $i++) 
		{
			$insert.= "'".$campos[$i][0]."', ";
			$columnas.= $campos[$i][1].", ";
		}
		/* separamos las ultimas columnas y datos de ingreso para quitar la coma extra */
		$ult_ing="'".$campos[$i][0]."' ";
		$ult_col=$campos[$i][1].") ";					
		
		// retornamos
		return guardar($tabla, $columnas.$ult_col." VALUES(".$insert.$ult_ing.")");
	}

	/**
	* funcion guardar en la BD
	* @param string, recivimos el nombre de la tabla y los registros a guardar.
	*/
	function guardar($tabla ,$respuesta)
	{
		include('../config.php');// llama configuración.

		$sql="INSERT INTO $tabla($respuesta"; // sql para insertar
		$conn = mysqli_connect($servidor, $usuario, $clave, $bd); //conexión
		$resultado = $conn->query($sql); // resultado de la conexión.
	}
?>

