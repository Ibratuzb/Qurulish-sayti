<?php
session_start();
require_once('connection.php');

if (isset($_SESSION['user_id']) && isset($_POST['totalPrice'])) {
    $user_id = $_SESSION['user_id'];
    $total_price = $_POST['totalPrice'];
    $query = "UPDATE users SET total_price = $total_price WHERE id = $user_id";
    mysqli_query($con, $query) or die(mysqli_error($con));
    echo "Total price updated successfully.";
} else {
    echo "Invalid request.";
}
?>
