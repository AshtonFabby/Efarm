<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include_once"conn.php";

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    echo($username);
    echo($password);

    $sql = "SELECT * FROM users WHERE password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if($result && mysqli_num_rows($result) > 0){
        
        $_SESSION["username"] = $row["username"];
        $_SESSION["firstname"] = $row["firstname"];
        $_SESSION["firstname"] = $row["lastname"];
        $_SESSION["email"] = $row["email"];

        // echo($_SESSION["username"]);
        // echo($_SESSION["firstname"]);
        // echo($_SESSION["firstname"]);
        // echo($_SESSION["email"]);

        header("location: ../products.php");

        exit();
        mysqli_close($conn);


    }

    
}