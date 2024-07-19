<?php
require 'db.php';

try {
    $sql = "CREATE TABLE IF NOT EXISTS products (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        category VARCHAR(255) NOT NULL,
        stock INT(11) NOT NULL,
        price DECIMAL(10, 2) NOT NULL,
        description TEXT,
        image VARCHAR(255)
    )";

    $conn->exec($sql);
    echo "Table products created successfully.<br>";

    $sql = "INSERT INTO products (name, category, stock, price, description, image) VALUES
        ('Producto 1', 'Categoría 1', 100, 10.00, 'Descripción del Producto 1', 'imagen1.jpg'),
        ('Producto 2', 'Categoría 2', 50, 20.00, 'Descripción del Producto 2', 'imagen2.jpg'),
        ('Producto 3', 'Categoría 3', 200, 5.00, 'Descripción del Producto 3', 'imagen3.jpg'),
        ('Producto 4', 'Categoría 1', 150, 15.00, 'Descripción del Producto 4', 'imagen4.jpg')";

    $conn->exec($sql);
    echo "Initial data inserted successfully.<br>";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
