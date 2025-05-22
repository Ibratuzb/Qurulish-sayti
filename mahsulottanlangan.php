<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "store";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT users.name AS user_name, items.name AS product_name
        FROM users
        INNER JOIN users_items ON users.id = users_items.user_id
        INNER JOIN items ON users_items.item_id = items.id";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>User-Product Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Foydalanuvchi haqida ma'lumot</h1>

    <?php
    
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Foydalanuvchi</th>";
        echo "<th>Mahsulotlari</th>";
        echo "</tr>";

       
        while ($row = $result->fetch_assoc()) {
            $userName = $row['user_name'];
            $productName = $row['product_name'];

            echo "<tr>";
            echo "<td>$userName</td>";
            echo "<td>$productName</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Foydalanuvchi haqida ma'lumot yo'q .";
    }

    $conn->close();
    ?>
</body>
</html>
