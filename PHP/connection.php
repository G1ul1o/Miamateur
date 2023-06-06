<?php
$host = 'localhost';
$dbname = 'id20532041_miamateur';
$username = 'id20532041_root';
$password = 'geGt8T)]JgI]zzZY';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>