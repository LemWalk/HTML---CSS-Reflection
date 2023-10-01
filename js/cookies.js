
const cookieMenu = document.querySelector('.cookie-overlay');
const acceptButton = document.querySelector('.btn-acc');
const manageButton = document.querySelector('.btn-manage');

if (localStorage.getItem('cookieAccept') === 'true') {
  cookieMenu.classList.add('hidden')};


acceptButton.addEventListener('click', () => {
  cookieMenu.classList.toggle('hidden');
  localStorage.setItem("cookieAccept", "true");
});


manageButton.addEventListener('click', () => {
  cookieMenu.classList.toggle('hidden');
});
