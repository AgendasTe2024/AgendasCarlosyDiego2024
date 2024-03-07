<?php
include_once 'Conexion/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM citasf";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$citasf = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="en">

<head>
<title>Clinica Tepepan</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="higiene.png">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="IMG/icono.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <LINK REL=StyleSheet href="Conexion/estilo.css" TYPE="text/css" MEDIA=screen>

  <!--    Datatables  -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
  <title></title>


</head>

<body style="background-color: black; color:white;">

  <center>
  <img src="l1.jpg" height="50%" width="100%">
  </center>
  
  <ol class="breadcrumb" style="position:relative; left: 25%; width:70%; background-color:black;">
    <li class="breadcrumb-item"><a href="index.html">INICIO</a></li>
    <li class="breadcrumb-item"><a href="Agenda adultos.php">AGENDA ADULTOS</a></li>
    <li class="breadcrumb-item "><a href="Agenda niños.php">AGENDA NIÑOS</a></li>
    <li class="breadcrumb-item "><a href="Agenda alumnos.php">AGENDA ALUMNOS</a></li>
    <li class="breadcrumb-item "><a href="Agenda sesion.php">AGENDA DE SESION</a></li>
    <li class="breadcrumb-item "><a href="Administrador.php">ADMINSTRADOR</a></li>
  </ol>
  <center>
    <h1>AGENDA DE SESIONES FOTOGRAFICAS POR UNIDAD</h1>
    <h3>RECUERDA QUE LAS SESIONES DEBEN DE SER PROGRAMADAS</h3>
  </center>
  

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <table class="table table-vcenter card-table text-center" style="color:white;">
          <thead>
            <tr>
              <th>Fecha</th>
              <th>Unidad</th>
              <th>Nombre</th>
            </tr>
          </thead>

          <body>
            <?php
            foreach ($citasf as $citasf) {
            ?>
              <tr>
                <td><?php echo $citasf['Fecha'] ?></td>
                <td><?php echo $citasf['Unidad'] ?></td>
                <td><?php echo $citasf['Nombre'] ?></td>
              </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
      </div>
    </div>
  </div>
  <center>
  <div class="dere">
    <a href="CitasFF.php" class="btn btn-primary">Agendar Cita</a>
    <a href="index.html" class="btn btn-primary">Regresar</a>
  </div>
  </center>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->


  <!--    Datatables-->
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#tablaproductos').DataTable();
    });
  </script>


</body>

</html>