<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include_once'conn.php';
    
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastrname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO users (username, firstname, lastname, email, password)
    VALUES ('$username', '$firstname', '$lastrname', '$email', '$password')";

    mysqli_query($conn, $sql);



    header("location: ../login.html");
    exit();
    mysqli_close($conn);



    

}