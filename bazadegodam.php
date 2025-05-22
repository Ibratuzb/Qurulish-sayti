<?php
// Database connection code
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "store";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all registered users from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ro'yxatdan o'tgan foydalanuvchilar</title>
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
    <h1>Ro'yxatdan utgan foydalanuvchilar</h1>

    <?php
    
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Ism</th>";
        echo "<th>Email</th>";
        echo "</tr>";

        
        while ($row = $result->fetch_assoc()) {
            $userName = $row['name'];
            $userEmail = $row['email'];

            echo "<tr>";
            echo "<td>$userName</td>";
            echo "<td>$userEmail</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No registered users found.";
    }

    $conn->close();
    ?>
</body>
</html>
