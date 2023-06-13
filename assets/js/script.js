'use strict';

const addBookBtn = document.getElementById('add-book');
const favoritesBtn = document.getElementById('favorites');

const addModal = document.getElementById('add-modal');
const overlay = document.querySelector('.overlay');
const btnCloseModal = document.querySelector('.close-modal');

const handleOpenAddModal = () => {
  addModal.classList.remove('hidden');
  overlay.classList.remove('hidden');
};

const handleCloseAddModal = () => {
  addModal.classList.add('hidden');
  overlay.classList.add('hidden');
};

addBookBtn.addEventListener('click', handleOpenAddModal);
btnCloseModal.addEventListener('click', handleCloseAddModal);
overlay.addEventListener('click', handleCloseAddModal);

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && !addModal.classList.contains('hidden')) handleCloseAddModal();
});

const data = {
  title: 'Título do Livro',
  description: 'Descrição do Livro',
  imagePath: 'caminho/da/imagem.jpg',
};

document.getElementById('send-req-add').addEventListener('click', (e) => {
  e.preventDefault();

  const url = 'http://localhost/comfica/source/controllers/create.php';
  const options = {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({
      title: document.getElementById('title').value,
      description: document.getElementById('description').value,
      imagePath: document.getElementById('imagePath').value,
    }),
  };

  fetch(url, options)
    .then((response) => response.text())
    .then((result) => {
      console.log(result);
    })
    .catch((error) => {
      console.error('Erro ao enviar requisição:', error);
    });
});
