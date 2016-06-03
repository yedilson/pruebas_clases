<?php
	
	echo insertar("tb_personas",[[12,"num_doc"],["rambo","nombres"],["travolta","apellidos"],["mesero","rol"],["masculino","genero"],["2016-01-01","fecha_registro"]]);

	function insertar($tabla, $campos)
	{	
		echo "<table border='solid' width='200'>";
		echo "<td >".$campos[0][0]."<td>".$campos[0][1]."<tr>";
		echo "<td >".$campos[1][0]."<td>".$campos[1][1]."<tr>";
		echo "<td >".$campos[2][0]."<td>".$campos[2][1]."<tr>";
		echo "<td >".$campos[3][0]."<td>".$campos[3][1]."<tr>";
		echo "<td >".$campos[4][0]."<td>".$campos[4][1]."<tr>";
		echo "<td >".$campos[5][0]."<td>".$campos[5][1]."<tr>";
		echo "</table>";
		echo "<p>";

		$respuesta = " VALUES("."'".$campos[0][0]."','".$campos[1][0]."','".$campos[2][0]."','".$campos[3][0]."','".$campos[4][0]."','".$campos[5][0]."')";

		return guardar($tabla, $respuesta);
	}

	function guardar($tabla ,$respuesta)
	{
		include('../config.php');

		$sql="INSERT INTO $tabla(num_doc, nombres, apellidos, rol, genero, fecha_registro)";
		$sql.=$respuesta;
		echo $sql;
		$conn = mysqli_connect($servidor, $usuario, $clave, $bd);
		$resultado = $conn->query($sql);
	}
?>