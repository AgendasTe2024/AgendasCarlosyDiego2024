<?php
	
	require 'conexion.php';
	
	$Fecha = $_POST['Fecha'];
	$Unidad = $_POST['Unidad'];
	$Nombre = $_POST['Nombre'];

	$sql ="INSERT INTO citasf(Fecha, Unidad, Nombre) VALUES ('$Fecha','$Unidad','$Nombre')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		<title>Guardado</title>
		<link rel="shortcut icon" href="higiene.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>CITA GUARDADA</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="Agenda sesion.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>