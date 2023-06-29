<?php
include "conexion.php";
$con = conectar();
 if($_POST){ 
    $id = $_POST['id'];     
    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $query = "UPDATE `producto` SET `id`='$id',`nombre`='$nombre',`imagen`='$imagen' WHERE id='$id'";
    $resultado = mysqli_query($con,$query);
    if($resultado) {
        mysqli_close($con);    
        echo 
        '<script>
            alert("Registro actualizado");
            window.location = "./index.php";
        </script>';
        exit();
    }
} 




?>