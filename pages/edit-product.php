<?php
    include("connection.php");

    $idpr = $_GET['idpr'];

    $query = "SELECT * FROM producto WHERE id_producto = '$idpr'";
    $resultado = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Update Product</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="../index.php">TecnoStore</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="manage.php">Manage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <form action="edit.php" method="POST" enctype="multipart/form-data">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
        
            <?php foreach ($resultado as $row){?>
            <tr>
                <td><span name="idpr" ><?php echo $row['id_producto']?></span> </td>
                <td><input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre'];?>"></td>
                <td><input type="text" name="precio" class="form-control" value="<?php echo $row['precio'];?>"> </td>
                <td>
                    <select class="form-control" name="categoria" value="<?php echo $row['categoria'];?>" required="true">
                        <option value=""><span class="lead">Category</span></option>
                        <option value="Mouse">Mouse</option>
                        <option value="Keyboard">Keyboard</option>
                        <option value="Headphone">Headphone</option>
                        <option value="Laptop">Laptop</option>
                    </select></td>
                <td><input type="text" name="descripcion" class="form-control" value="<?php echo $row['descripcion'];?>"></td>
                <td><input type="file" name="imagen" class="form-control" value="<?php echo $row['imagen'];?>"></td>
            </tr>
            <?php } ?>
        </table>
        <a class="btn btn-primary form-control w-50" style="margin:30px 350px;" href="edit.php">Update</a>
        
    </form>
</body>
</html>