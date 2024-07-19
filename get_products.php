<?php
require 'db.php';

try {
    $stmt = $conn->prepare("SELECT * FROM products");
    $stmt->execute();
    $products = $stmt->fetchAll();
    echo json_encode($products);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
