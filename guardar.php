<?php
	
	require 'conexion.php';
	
	$Unidad = $_POST['Unidad'];
	$Nombre = $_POST['Nombre'];
	$Dia = $_POST['Dia'];
	$Turno = $_POST['Turno'];

	$sql ="INSERT INTO citasn(Unidad, Nombre, Dia, Turno) VALUES ('$Unidad','$Nombre','$Dia', '$Turno')";
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
					
					<a href="Agenda niños.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>