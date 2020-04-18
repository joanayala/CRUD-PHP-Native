<html>
    <head><title>Manejo CRUD</title></head>
    <body>
        <form action="insert.php" method="POST">
            <b>INGRESO DE PRODUCTOS</b><br><br>
            <table border=0>
                <tr><td>Codigo del producto: </td><td><input type="text" name="codigo" required/></td></tr>
                <tr><td>Nombre del producto: </td><td><input type="text" name="nombre" required/></td></tr>
                <tr><td>Cantidad de productos: </td><td><input type="text" name="cantidad" required/></td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr><td><input type = "submit" value="Registrar producto"></td></tr>
            </table>      
        </form>
        <hr>  
    </body>
</html>
<?php
    include("database.php");
    $sql = "SELECT 
                codigo_prod, 
                nombre_prod, 
                cantidad_prod
            FROM 
                productos 
                        
    ";
    $result = $conn->query($sql); 
    echo "<table border = 1>
        <tr><th>Codigo</th><th>Nombre</th><th>Cantidad</th><th>.</th><th>..</th></tr>
    ";    
                
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>".$row["codigo_prod"]."</td>
                <td>".$row["nombre_prod"]."</td>
                <td>".$row["cantidad_prod"]."</td>                
                <td><a href='form_update.php?codigo=".$row['codigo_prod']."'><img src='edit.png' width='25'></a></td>
                <td><a href='delete.php?codigo=".$row['codigo_prod']."'><img src='delete.png' width='25'></a></td>
                </tr>  
            ";
        }
    } else {
        echo "No hay productos registrados";
    }
    echo "</table>";
    $conn->close(); 
?>