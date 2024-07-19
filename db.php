<?php
$servername = "mysql.railway.internal";
$username = "root";
$password = "qeUgUMifUjLaHQbrPAOtBSWcJdKLRFyG";
$dbname = "railway";
$port = 3306;

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
