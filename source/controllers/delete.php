<?php

require_once "../database/connection.php";

function deleteBook($pdo, $id) {
    $sql = "DELETE FROM books WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->rowCount();
}