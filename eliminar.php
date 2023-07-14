<?php 
include("conexion.php");


$id = $_GET['id'];

$consulta = "DELETE FROM clientes WHERE id = '$id'";

$resultado = mysqli_query($conexion, $consulta);
        
if($resultado){
    header("location: datos.php");
}else{
    echo "<script>alert('No se pudo eliminar');</script>";
}
    

?>