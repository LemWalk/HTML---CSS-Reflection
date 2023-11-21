
const cookieMenu = document.querySelector('.cookie-overlay');
const acceptButton = document.querySelector('.btn-acc');
const manageButton = document.querySelector('.btn-manage');

if (localStorage.getItem('cookieAccept') === 'true') {
  cookieMenu.classList.add('hidden')
  document.querySelector('body').style.overflow = "auto";
};


acceptButton.addEventListener('click', () => {
  cookieMenu.classList.toggle('hidden');
  localStorage.setItem("cookieAccept", "true");
  document.querySelector('body').style.overflow = "auto";
});


manageButton.addEventListener('click', () => {
  cookieMenu.classList.toggle('hidden');
  document.querySelector('body').style.overflow = "hidden";
});
