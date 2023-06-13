<?php

include_once "./source/controllers/read.php";
include_once "./source/database/connection.php";

$books = getBooks($connection);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biblioteca - Comfica</title>

    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <div class="overlay hidden"></div>
    <div class="modal hidden" id="add-modal">
      <div class="modal-header">
        <button class="close-modal">&times;</button>
        <h1>Adicionar livro</h1>
      </div>
      <div class="modal-body">
        <label for="title" class="form__label">Título:</label>
        <input type="text" name="title" class="form__input" id="title">
        <label for="description" class="form__label">Descrição:</label>
        <input type="text" name="description" class="form__input" id="description">
        <label for="imagePath" class="form__label">URL da imagem:</label>
        <input type="text" name="imagePath" class="form__input" id="imagePath">

        <div class="favorite__container">
          <button class="cancel-btn btn">Cancelar</button>
          <button class="confirm-btn btn" id="send-req-add">Confirmar</button>
        </div>
      </div>
    </div>

    <div class="modal hidden" id="remove-modal">
      <div class="modal-body">
        <h2>Deseja excluir o livro $nome?</h2>

        <div class="favorite__container">
          <button class="cancel-btn btn">Cancelar</button>
          <button class="confirm-btn btn">Confirmar</button>
        </div>
      </div>
    </div>

    <header class="header">
      <h1 class="header__title">Biblioteca de Livros</h1>
    </header>

    <main class="main">
      <div class="favorite__container">
        <button class="favorite-btn btn" id="favorites">Favoritos</button>
      </div>

      <div class="showcase">
        <?php
          foreach ($books as $book) {
            $title = $book['title'];
            $description = $book['description'];
            $imagePath = $book['image_path'];
            
            echo '<div class="card">';
            echo '<img src="' . $imagePath . '" alt="' . $title . '">';
            echo '<h3>' . $title . '</h3>';
            echo '<p>' . $description . '</p>';
            echo '</div>';
          }
        ?>
        <button class="add-btn btn" id="add-book">Adicionar</button>
      </div>
    </main>

    <script src="./assets/js/script.js"></script>
  </body>
</html>
