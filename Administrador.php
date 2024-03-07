<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Tepepan</title>
    <link rel="shortcut icon" href="higiene.png">
    <LINK REL=StyleSheet href="Conexion/tabler.min.css" TYPE="text/css" MEDIA=screen>

</head>

<body>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="card card-md">
                <!-- <h2 class="h2  mb-4">Login to your account</h2> -->
                <h1 class="text-center">SISTEMA DE LOGEO PARA ELIMINAR TODOS LOS DATOS</h1>
                <div class="card-body" style="position:relative; left: 25%;">
                    <form method="post" action="Conexion/delete.php">
                        <div class="col-md-6 mb-2">
                            <label class="form-label">CONTRASEÑA:</label>
                            <input class="form-control" type="password" placeholder="Ingrese Su Contraseña" name="contraseña" id="contraseña">
                        </div>
                        <input type="submit" class="btn btn-danger" name="eliminar" value="Eliminar Todos Los Registros">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>