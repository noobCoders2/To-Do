const editBtn = document.querySelector('.edit_btn');
const modalCont = document.querySelector('.modal_container');
const closeBtn = document.querySelector('.modal_close_btn');
const saveBtn = document.querySelector('.modal_save_btn');


editBtn.addEventListener('click', (e) => {
    e.preventDefault();
    modalCont.classList.add('active');
})

saveBtn.addEventListener('click', (e) => {
    e.preventDefault();
});

closeBtn.addEventListener('click', (e) => {
    modalCont.classList.remove('active');
});