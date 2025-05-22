<?php
// Database connection code
$servername = "localhost";
$username = "x_u_10471_store";
$password = "store";
$dbname = "x_u_10471_store";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all products from the database
$sql = "SELECT * FROM items";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        .product {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .product img {
            width: 100px;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <h1>Products</h1>

    <?php
    // Check if there are any products
    if ($result->num_rows > 0) {
        // Loop through each product and display its details
        while ($row = $result->fetch_assoc()) {
            $productName = $row['name'];
            $productPrice = $row['price'];
            $productImage = $row['image'];

            echo "<div class='product'>";
            echo "<img src='$productImage' alt='Product Image'>";
            echo "<div>";
            echo "<h3>$productName</h3>";
            echo "<p>Price: $productPrice</p>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "No products found.";
    }

    // Check if the request is a POST request from the adminpanel.php form
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Add the code for adding a new product here
    }

    $conn->close();
    ?>
</body>
</html>
