<?php

require '../conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si se ha enviado el formulario por el método POST

    if (isset($_POST["contraseña"])) {
        $contra = $_POST["contraseña"];

        $def = "12345678";

        if ($contra === $def) {
            $sql = "DELETE FROM citasf";
            $sql2 = "DELETE FROM citasa";
            $sql3 = "DELETE FROM citasn";

            if ($mysqli->query($sql) === TRUE && $mysqli->query($sql2) === TRUE && $mysqli->query($sql3) === TRUE) {
                echo "Todos Los Registros Han Sido Eliminados Con Éxito.";
            } else {
                echo "Error Al Eliminar Todos Los Registros: " . $mysqli->error;
            }
        } else {
            echo "La Contraseña Es Incorrecta.";
        }
    } else {
        echo "No Se Han Proporcionado Nombre O Contraseña.";
    }
    
}
?>
<br>
<html>
<a href="../Administrador.php"><button type="button">Regresar</button></a>
</html>



f ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si se ha enviado el formulario por el método POST

    if (isset($_POST["contraseña"])) {
        $contra = $_POST["contraseña"];

        $def = "12345678";

        if ($contra === $def) {
            $sql = "DELETE FROM citasf";
            $sql2 = "DELETE FROM citasa";

            if ($mysqli->query($sql) === TRUE && $mysqli->query($sql2) === TRUE) {
                echo "Todos los registros han sido eliminados con éxito.";
            } else {
                echo "Error al eliminar todos los registros: " . $mysqli->error;
            }
        } else {
            echo "La contraseña es incorrecta.";
        }
    } else {
        echo "No se han proporcionado nombre o contraseña.";
    }
}