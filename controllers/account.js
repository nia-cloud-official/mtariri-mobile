const openModal = document.getElementById('openModal');
const closeModal = document.getElementById('closeModal');
const modal = document.getElementById('myModal');

openModal.addEventListener('click', () => {
    modal.classList.remove('hidden');
    document.body.classList.add('modal-active');
});

closeModal.addEventListener('click', () => {
    modal.classList.add('hidden');
    document.body.classList.remove('modal-active');
});

window.addEventListener('click', (event) => {
    if (event.target == modal) {
        modal.classList.add('hidden');
        document.body.classList.remove('modal-active');
    }
});

// Opening modal
function run() { 
    var main = document.getElementById("button");
    main.onclick() = true;
}
