<?php

require_once "../database/connection.php";

function updateBook($pdo, $id, $title, $description, $imagePath) {
    $sql = "UPDATE books SET title = ?, description = ?, imagePath = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $description, $imagePath, $id]);
    return $stmt->rowCount();
}