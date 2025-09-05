<?php
require 'db.php';

// Example: fetch all users
$stmt = $pdo->query("SELECT id, name FROM users ORDER BY id ASC");

while ($row = $stmt->fetch()) {
    echo $row['id'] . ": " . $row['name'] . PHP_EOL;
}
