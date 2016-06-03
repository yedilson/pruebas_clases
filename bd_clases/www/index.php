<!DOCTYPE html>
	<html>
	<head>
		<title>INDEX</title>
		<?php
			include("clases/Graficos.php");
			$new_obj	=	new Graficos; 
		?>
	</head>
	<body>
	<?php
		$t="Mi Titulo";
		echo $new_obj->imprimir_titulo($t);
		echo $new_obj->retornar_fecha();
		$new_obj->ini();
		//$new_obj->retornar_usuarios();
		$new_obj->escribir("SELECT * FROM tb_personas WHERE 1", 3, "#11eeff");
	?>

	</body>
</html>