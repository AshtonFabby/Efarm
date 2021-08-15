<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include_once'conn.php';
    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $picture = "test.jpj";
    $user = $_SESSION["username"]; 

    echo($title);
    echo($description);
    echo($price);
    echo($user);



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $sql = "INSERT INTO products (title, description, price, picture, user)
    VALUES ('$title', '$description', '$price', '$picture', '$user')";

    mysqli_query($conn, $sql);

    header("location: ../products.html");
    exit();
    mysqli_close($conn);




}