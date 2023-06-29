<?php
include("conexion.php");
$id = $_GET['id'];
$con = conectar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <form action="actualizar_producto.php" method="post" enctype="multipart/form-data">   
                <?php                
                $query = "SELECT * FROM producto WHERE id = '$id'";
                $resultado = mysqli_query($con,$query);
                $row = mysqli_fetch_assoc($resultado);
                ?>
                <p><input type="hidden" name="id"  value="<?= $row['id']?>"></p>               
                <p><input type="text" name="nombre"  value="<?= $row['nombre']?>"></p>
                <p><img height="140px" src="data:image/jpeg;base64,<?= base64_encode($row['imagen'])?>"></p>                   
                <input type="file" name="imagen" required value="<img height="70px" src="data:image/jpeg;base64,<?= base64_encode($row['imagen'])?>">
                <input type="submit" value="Actualizar">
            <br/>
            <br/>         
    </form>
</center>
    
</body>
</html>