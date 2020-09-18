<?php

include("connection.php");

$idpr = $_GET['idpr'];

$query = "DELETE FROM producto WHERE id_producto = '$idpr'";
$resultado = mysqli_query($conn, $query);

if($resultado){
    header("Location: manage-product.php");
}else{
    echo "No se pudo eliminar el registro ". $idpr;
}

?>