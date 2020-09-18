<?php
    include("connection.php");

    $idpr = $_POST['idpr'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $imagen = $_POST['imagen'];

    $query = "UPDATE FROM producto WHERE id_producto = '$idpr' nombre = '$nombre', precio = '$precio', categoria = '$categoria', 
                descripcion = '$descripcion', imagen = '$imagen'";
    $resultado = mysqli_connect($conn, $query);

    if($resultado){
        header("Location:manage-product.php");
    }else{
        echo "No se pudo editar el registro";
    }

?>