<html lang="es">
	<head>
		<title>TIENDA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<link rel="shortcut icon" href="higiene.png">

	</head>
	<body style="background-color: black; color: white;">
		
		<div class="container">
			<div class="row">
			<center>
  <img src="l1.jpg" height="50%" width="100%">
  </center>
  		<div>
				<center>
			<h1> AGENDA DE CITAS EXCLUSIVAMENTE DE LOS PACIENTES NIÑOS</h1>
				</center>
			</div>
			<center>
			<form class="form-horizontal" method="POST" action="guardaF.php" autocomplete="off">
			<div class="form-group">
					<label for="Fecha" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-10">
						<input type="Fecha" class="form-control" id="Fecha" name="Fecha" placeholder="Fecha" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Unidad" class="col-sm-2 control-label">Unidad</label>
					<div class="col-sm-10">
						<input type="Unidad" class="form-control" id="Unidad" name="Unidad" placeholder="Unidad" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="Nombre" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required>
					</div>
				</div>		
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<br>
						<a href="Agenda sesion.php"><button type="button">Regresar</button></a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
			</center>
		</div>
	</body>
</html>