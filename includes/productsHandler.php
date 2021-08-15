<?php
session_start();

include_once"conn.php";

$result = mysqli_query($conn, 'SELECT * FROM products');


while($product = mysqli_fetch_object($result)){

    echo($product->title);

}