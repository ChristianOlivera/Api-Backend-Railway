<?php
require 'db.php';

$data = json_decode(file_get_contents("php://input"));

$name = $data->name;
$category = $data->category;
$stock = $data->stock;
$price = $data->price;
$description = $data->description;
$image = $data->image;

try {
    $stmt = $conn->prepare("INSERT INTO products (name, category, stock, price, description, image) VALUES (:name, :category, :stock, :price, :description, :image)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':stock', $stock);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image', $image);
    $stmt->execute();
    echo json_encode(["message" => "Product added successfully"]);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
