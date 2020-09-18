<?php
    include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Manage Product</title>
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

    <?php if(isset($_SESSION['mensaje'])){?>
    <div id="myAlert" class="alert alert-<?php echo $_SESSION['tipo']; ?>" role="alert">
        <a href="#" class="close">&times;</a>
        <?php echo $_SESSION['mensaje']; ?>
    </div>
    <?php session_unset();}?>

    <form action="../includes/add.php" method="POST" enctype="multipart/form-data">
        <hr>
        <h2 class="text-center">Add Products</h2>
        <hr>

        <div class="w-25 m-auto">
            <div class="form-group">
                <input class="form-control" type="text" name="nombre" placeholder="Name" required="true">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="precio" placeholder="Price" required="true">
            </div>
            <div class="form-group">
                <select class="form-control" name="categoria" required="true">
                    <option value=""><span class="lead">Category</span></option>
                    <option value="Mouse">Mouse</option>
                    <option value="Keyboard">Keyboard</option>
                    <option value="Headphone">Headphone</option>
                    <option value="Laptop">Laptop</option>
                </select>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="descripcion" placeholder="Description" required="true">
            </div>
            <div class="form-group">
                <input class="form-control" type="file" name="imagen">
            </div>
            <input class="btn btn-primary form-control" type="submit" name="guardar" value="Save">
        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>

        <?php foreach ($conn->query('SELECT * FROM producto') as $row){?>
        <tr>
            <td><?php echo $row['id_producto']?> </td>
            <td><?php echo $row['nombre'] ?></td>
            <td><?php echo $row['precio'] ?></td>
            <td><?php echo $row['categoria'] ?></td>
            <td><?php echo $row['descripcion'] ?></td>

            <td><a href="delete-product.php?idpr=<?php echo $row['id_producto']; ?>" class="btn btn-danger btnaction" style="border-radius:20px">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                    </svg>
                </a>
            </td>

            <td><a href="edit-product.php?idpr=<?php echo $row['id_producto']; ?>" class="btn btn-primary" style="border-radius:20px">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd"
                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".close").click(function () {
                $("#myAlert").alert("close");
            });
        });
    </script>
    <script src="../js/validation.js"></script>
   
</body>

</html>