<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>TecnoStore</title>
</head>

<body>
    <nav class="main-nav navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">TecnoStore</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/product.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/manage.php">Manage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="main-banner">
        <div class="text-banner">
            <h1 class="display-3">certified quality</h1>
            <p style="font-size: 25px">The best products of tecnology in Colombia</p>
            <a class="btn btn-primary" href="pages/product.php">See More</a>
        </div>
    </section>

    <section class="product">
        <h1 class="" style="text-transform:capitalize; text-align:center; margin-top:20px;">our products</h1>
        <p class="lead" style="text-align:center; font-size:20px; margin:30px"> Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Repellendus, modi inventore nam porro libero dolores
            labore dolorum quidem molestiae officia ipsum, nesciunt ex exercitationem recusandae. Laudantium aperiam
            corrupti alias vel!
        </p>
        <br>
        <div class="card-deck text-center">
            <div class="card">
                <img src="images/background.jpg" class="card-img-top" width="312px" height="208px">
                <div class="card-body">
                    <h5 class="card-title">Keyboards</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <a class="btn btn-primary" href="pages/keyboard.php">See Category</a>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="images/headphone.jpg" class="card-img-top" width="312px" height="208px">
                <div class="card-body">
                    <h5 class="card-title">Headphones</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <a class="btn btn-primary" href="pages/headphone.php">See Category</a>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="images/mouse.jpg" class="card-img-top" width="312px" height="208px">
                <div class="card-body">
                    <h5 class="card-title">Mice</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content.</p>
                    <a class="btn btn-primary" href="pages/mouse.php">See Category</a>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="images/laptop.jpg" class="card-img-top" width="312px" height="208px">
                <div class="card-body">
                    <h5 class="card-title">Laptops</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <a class="btn btn-primary" href="pages/laptop.php">See Category</a>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>