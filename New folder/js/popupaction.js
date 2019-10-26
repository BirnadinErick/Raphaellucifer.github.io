var modal = document.getElementById('modal');
var modalBtn = document.getElementById('modalBtn')[0];
var closeBtn = document.getElementsByClassName('closeBtn')[0];

//Listeners

modalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);

//Functions

function openModal() {
    modal.style.display = 'block';
}

function closeModal() {
    modal.style.display = 'none';
}