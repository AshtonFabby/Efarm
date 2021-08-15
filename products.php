<?php
session_start();

include_once"includes/conn.php";

$result = mysqli_query($conn, 'SELECT * FROM products');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>EFARMING</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand " href="index.html">EFARMING</a><button data-toggle="collapse"
                data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link "
                            href="profile.php"><?php echo($_SESSION["username"]) ?></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link " href="place.html">place product</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="about" class="bg-primary">
        <h1 class="text-center" style="color: rgb(255,255,255);">Products</h1>
    </section>
    <section class="products">


        <div class="container">

            <div class="row">
                <?php while($product = mysqli_fetch_object($result)){ ?>
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src=" <?php echo($product->picture); ?>"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title"><?php echo($product->title); ?></h4>
                            <p class="desc"><?php echo($product->description); ?></p>

                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="product.php?id=<?php echo($product->id); ?>"
                                class="btn btn-sm btn-primary float-right">Order Now</a>
                            <div class="price-wrap h5">
                                <span class="price-new"><?php echo($product->price); ?></span>
                            </div>
                        </div>
                    </figure>
                </div>
                <?php } ?>
            </div>

        </div>


        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js">
        </script>
        <script src="assets/js/creative.js"></script>
</body>

</html>