<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $descriptionn = $_POST['description'];
    $imagePath = $_POST['imagePath'];

    require_once "../database/connection.php";

    try {
        $sql = "INSERT INTO books (title, descriptionn, imagePath) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $description, $imagePath]);

        echo 'Livro inserido no banco de dados com sucesso!';
    } catch (PDOException $e) {
        echo 'Erro ao inserir livro no banco de dados: ' . $e->getMessage();
    }
}