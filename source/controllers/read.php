<?php

function getBooks($pdo) {
    $sql = "SELECT * FROM books";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}