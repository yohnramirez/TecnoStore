<?php
    include("connection.php");
    $query = "SELECT * FROM producto WHERE categoria = 'Mouse'";
    $resultado = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Mice</title>
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

    <hr>
    <div class="container">
        <h1 class="text-center">Mice</h1>
    </div>
    <hr>

    <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link" href="product.php">All</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="keyboard.php">Keyboards</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="headphone.php">Headphones</a>
        <a class="flex-sm-fill text-sm-center nav-link active" href="mouse.php">Mice</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="laptop.php">Laptops</a>
    </nav>


        <div class="card_ind card-column-4" style="max-width:100%;">
            <?php foreach($resultado as $row){ ?>
            <div class="card" style="width: 17rem; margin: 10px; text-align:center; background:#EFEAF5;">
                <img style="width: 16.9rem; height: 10rem;" src="images/<?php echo $row['imagen'] ?>"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title mb-2"><strong><?php echo $row['nombre'] ?></strong></h5>
                    <p class="card-text mb-0"><?php echo $row['precio'] ?> COP </p>
                    <p class="card-text"><?php echo $row['descripcion'] ?> </p>
                    <a href="#" class="btn btn-primary">Buy it</a>
                </div>
            </div>
            <?php } ?>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".close").click(function () {
                    $("#myAlert").alert("close");
                });
            });
        </script>

</body>

</html>