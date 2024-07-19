<?php
require 'db.php';

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$name = $data->name;
$category = $data->category;
$stock = $data->stock;
$price = $data->price;
$description = $data->description;
$image = $data->image;

try {
    $stmt = $conn->prepare("UPDATE products SET name = :name, category = :category, stock = :stock, price = :price, description = :description, image = :image WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':stock', $stock);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image', $image);
    $stmt->execute();
    echo json_encode(["message" => "Product updated successfully"]);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
