<?php

include_once"includes/conn.php";


$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id='$id'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if($result && mysqli_num_rows($result) > 0){
        
    $title = $row["title"];
    $description = $row["description"];
    $price = $row["price"];
    $user = $row["user"];
    $picture = $row["picture"];


    // echo("$title");
    // echo("$description");
    // echo("$price");

}
?>

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
        <div class="container"><a class="navbar-brand" href="index.html">EFARMING</a><button data-toggle="collapse"
                data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link"
                            href="profile.php"><?php echo($_SESSION["username"]) ?></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                            href="place.html?username=<?php echo($_SESSION["username"]) ?>">place product</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="about" class="bg-primary">
        <h1 class="text-center" style="color: rgb(255,255,255);"><?php echo($title); ?></h1>
        <p class="text-center" style="color: white;"><?php echo($description); ?></p>
        <p class="text-center" style="color: white;">$<?php echo($price); ?></p>

    </section>
    <section class="products">


        <div class="container">

            <div class="row">

                <div class="right col-md-4 mx-auto">
                    <form action="includes/productHandler.php" method="post">
                        <div class="form-group">
                            <label for="nameInput">Your name</label>
                            <input type="text" name="nameInput" class="form-control" id="nameInput"
                                aria-describedby="Your Name">
                        </div>

                        <div class="form-group">
                            <label for="numberInput">Your Phone Number</label>
                            <input type="text" name="number" class="form-control" id="numberInput"
                                aria-describedby="Your Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="numberInput">Disired Amount</label>
                            <input type="number" name="amount" class="form-control" id="numberInput"
                                aria-describedby="Your Phone Number">
                        </div>

                        <div class="form-group">
                            <label for="numberInput">Shipping address</label>
                            <br>
                            <textarea name="address" id="" cols="40" rows="10"></textarea>
                        </div>
                        <div class="form-group invisible">
                            <label for="productId">ProductId</label>
                            <input type="text" name="productId" class="form-control" id="numberInput"
                                value="<?php echo($id); ?>" aria-describedby="Your Phone Number">

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
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