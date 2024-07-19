<?php
require 'db.php';

$category = $_GET['category'];

try {
    $stmt = $conn->prepare("SELECT * FROM products WHERE category = :category");
    $stmt->bindParam(':category', $category);
    $stmt->execute();
    $products = $stmt->fetchAll();
    echo json_encode($products);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
