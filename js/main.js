
//========= Burger menu & Side menu functions =========

const burgerMenu = document.querySelector('.burger-menu');
const sideMenu = document.querySelector('.side-menu');
const overlay = document.querySelector('.overlay');
const containerOuter = document.querySelector('.container-outer');

burgerMenu.addEventListener('click', () => {
burgerMenu.classList.toggle('active');
sideMenu.classList.toggle('active');
containerOuter.classList.toggle('active');
overlay.classList.toggle('active');
document.querySelector('html').style.overflowY = 'hidden';
containerOuter.style.overflowY = 'auto';
containerOuter.style.height = '100vh';
});

overlay.addEventListener('click', () => {
    burgerMenu.classList.toggle('active');
    sideMenu.classList.toggle('active');
    containerOuter.classList.toggle('active');
    overlay.classList.toggle('active');
    document.querySelector('html').style.overflowY = 'auto';
    containerOuter.style.height = 'auto';
});


//======== Tick Box =======================

const checkbox = document.querySelector('.checkbox');
const tickbox = document.querySelector('.custom-tickbox');
const formText = document.querySelector('.form-text')

checkbox.addEventListener('click', () => {
    tickbox.classList.toggle('active');
})

formText.addEventListener('click', () => {
    tickbox.classList.toggle('active');
})


