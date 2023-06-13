<?php

require_once "../database/connection.php";

$requestBody = file_get_contents("php://input");

$data = json_decode($requestBody);

$title = $data->title;
$description = $data->description;
$imagePath = $data->imagePath;

function createBook($pdo, $title, $description, $imagePath) {
    $sql = "INSERT INTO books (title, description, image_path) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $description, $imagePath]);
    return $pdo->lastInsertId();
}

createBook($connection, $title, $description, $imagePath);