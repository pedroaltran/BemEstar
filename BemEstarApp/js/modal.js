const openEditModalButton = document.querySelector('#modal-editar');
const closeModalButton = document.querySelector('#modal-fechar'); 

const modal = document.querySelector('#modal');
const fade = document.querySelector('#fade');


const toggleModal = () => {
    modal.classList.toggle("hide");
    fade.classList.toggle("hide");
}

[openEditModalButton, closeModalButton, fade].forEach((el) => {
    el.addEventListener("click", () => toggleModal());
});

