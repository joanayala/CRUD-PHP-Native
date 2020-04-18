<?php
    include("database.php");
    $codigo = $_GET["codigo"];
    $sql = "DELETE FROM productos WHERE codigo_prod = '$codigo'";

    if ($conn->query($sql) === TRUE) {
        echo "Producto eliminado.<br>";
        echo "<br><a href='index.php'>Regresar</a>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>