<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $category = $_POST["category"];
    $shortDesc = $_POST["short_description"];
    $description = $_POST["description"];

    // Handle image upload
    $imagePath = "";
    if (!empty($_FILES["image"]["name"])) {
        $targetDir = "uploads/";
        $imagePath = $targetDir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);
    }

    $sql = "INSERT INTO products (name, price, category, short_description, description, image_path) 
            VALUES ('$name', '$price', '$category', '$shortDesc', '$description', '$imagePath')";

    if ($conn->query($sql) === TRUE) {
        echo "Product saved successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
