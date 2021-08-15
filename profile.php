<?php
session_start();

include_once"includes/conn.php";

$result = mysqli_query($conn, 'SELECT * FROM orders');
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
        <h1 class="text-center" style="color: rgb(255,255,255);"><?php echo($_SESSION["username"]); ?></h1>
        <h4 class="text-center" style="color: white;">Farmer</h4>
    </section>

    <section class="orders">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Address</th>
                    <th scope="col">Order id</th>
                </tr>
            </thead>
            <tbody>
                <?php while($order = mysqli_fetch_object($result)){ ?>
                <tr>
                    <th><?php echo($order->id); ?></th>
                    <td><?php echo($order->name); ?></td>
                    <td><?php echo($order->number); ?></td>
                    <td><?php echo($order->amount); ?></td>
                    <td><?php echo($order->address); ?></td>
                    <td><?php echo($order->productId); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>


    </section>




    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/creative.js"></script>
</body>

</html>