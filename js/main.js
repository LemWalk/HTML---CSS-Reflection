
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
});

overlay.addEventListener('click', () => {
    burgerMenu.classList.toggle('active');
    sideMenu.classList.toggle('active');
    containerOuter.classList.toggle('active');
    overlay.classList.toggle('active');
});





