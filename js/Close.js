const addNew = document.querySelector(' .add-new-btn');
const modal = document.querySelector('.Model-container');
const closeModal = document.querySelector('.window-close');
const body = document.querySelector('.body');

addNew.addEventListener('click', function(){
    modal.style.display='block';
});

closeModal.addEventListener('click', function(){
    modal.style.display='none';
});