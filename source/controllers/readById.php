<?php

require_once "../database/connection.php";

function getBookById($pdo, $id) {
    $sql = "SELECT * FROM books WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}