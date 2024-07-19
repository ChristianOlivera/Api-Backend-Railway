<?php
require 'db.php';

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;

try {
    $stmt = $conn->prepare("DELETE FROM products WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo json_encode(["message" => "Product deleted successfully"]);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
