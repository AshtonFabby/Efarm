<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include_once'conn.php';
    $name = $_POST["nameInput"];
    $number = $_POST["number"];
    $amount = $_POST["amount"];
    $address = $_POST["address"];
    $productId = $_POST["productId"];


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO orders (name, number, amount, address, productId)
    VALUES ('$name', '$number', '$amount', '$address', '$productId')";

    mysqli_query($conn, $sql);

    header("location: ../products.php");
    exit();
    mysqli_close($conn);



}