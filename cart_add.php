<?php
    session_start();
    require 'connection.php';
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $add_query="insert into users_items(user_id, item_id, status) values ('$user_id', '$item_id', 'Added to cart')";
    $add_query_result=mysqli_query($con,$add_query) or die(mysqli_error($con));
    header('location: products.php');
?>
