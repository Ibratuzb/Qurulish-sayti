<?php
    require('connection.php');
    if(isset($_GET['action']) && isset($_GET['id'])) {
        $action = $_GET['action'];
        $id = $_GET['id'];
        $quantity = 1;
        if(isset($_SESSION['cart'][$id])) {
            $quantity = $_SESSION['cart'][$id];
        }
        if($action == 'increase') {
            $quantity++;
        } elseif($action == 'decrease' && $quantity > 1) {
            $quantity--;
        } elseif($action == 'remove') {
            unset($_SESSION['cart'][$id]);
            header('Location: cart.php');
        }
        $_SESSION['cart'][$id] = $quantity;
        $user_id = $_SESSION['user_id'];
        mysqli_query($con, "UPDATE cart SET quantity=$quantity WHERE user_id=$user_id AND product_id=$id");
        $total_items = count($_SESSION['cart']);
        $response = array('status' => 'success', 'quantity' => $quantity, 'total_items' => $total_items);
        echo json_encode($response);
    }
 
?>