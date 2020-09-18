<?php
    
    include_once('../pages/connection.php');

    if(isset($_POST['guardar'])){
        $imagen = $_FILES['imagen']['name'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];

        if(isset($imagen) && $imagen != ""){
            $tipo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];

            if(!((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png')))){
                $_SESSION['mensaje'] = 'solo se admiten archios jpeg, png, gif y webp';
                $_SESSION['tipo'] = 'danger';
                header("Location:../pages/manage-product.php");
            }else{
                $query = "INSERT INTO producto (nombre, precio, categoria, descripcion, imagen) 
                        values ('$nombre', '$precio', '$categoria', '$descripcion', '$imagen')";
                $resultado = mysqli_query($conn, $query);
                if($resultado){
                    $_SESSION['mensaje'] = "Subido correctamente";
                    move_uploaded_file($temp, '../pages/images/'.$imagen);
                    $_SESSION['tipo'] = 'success';
                    header("Location:../pages/manage-product.php");
                }else{
                    $_SESSION['mensaje'] = "Ocurrió un error";
                    $_SESSION['tipo'] = 'danger';
                }
            }
        }
    }
?>
