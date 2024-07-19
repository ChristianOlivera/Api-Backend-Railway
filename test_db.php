<?php
require 'db.php';

try {
    $stmt = $conn->query("SELECT 1");
    if ($stmt !== false) {
        echo "Database connection successful!";
    } else {
        echo "Database connection failed!";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
