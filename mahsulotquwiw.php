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

// Get form data
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_FILES['image'];

// Prepare and execute SQL query to insert the product
$sql = "INSERT INTO items (name, price) VALUES ('$name', '$price')";
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;

    // Upload the image file
    $target_dir = "img/";
    $target_file = $target_dir . basename($image["name"]);
    $image_path = $target_dir . $last_id . "_" . basename($image["name"]);
    
    if (move_uploaded_file($image["tmp_name"], $target_file)) {
        // Rename the file with the product ID prefix
        rename($target_file, $image_path);
        
        // Update the product with the image file path
        $sql = "UPDATE items SET image = '$image_path' WHERE id = $last_id";
        $conn->query($sql);
        
        echo "Mahsulot muvaffaqiyatli qo'shildi.<br>";
        echo "Mahsulot ID: " . $last_id . "<br>";
        echo "Nomi: " . $name . "<br>";
        echo "Narxi: " . $price . "<br>";
        echo "Rasmi:<br>";
        echo "<img src='$image_path' alt='Product Image'>";
    } else {
        echo "Rasmni yuklashda xatolik yuz berdi.";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
