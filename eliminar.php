<?php
    
    include("conexion.php");
    $con = conectar();
    $id = $_REQUEST['id'];
        
        $eliminar = "DELETE FROM `producto` WHERE id = '$id'";
        
        $resultado = mysqli_query($con,$eliminar);

        if($resultado){
            mysqli_close($con);
            echo 
            '<script>
                alert("Registro eliminado con éxito");
                window.location = "./index.php";
            </script>';
            exit();
            
        }
        
    