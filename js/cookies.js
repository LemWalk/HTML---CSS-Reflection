//======= example code delete later ==========

const cookieStyle = document.querySelector('.consent');
const selectBody = document.querySelector('.body');

function acceptButton() {
    const accept = document.querySelector('.accept-btn');
    accept.addEventListener("click", function()  {
        localStorage.setItem("cookieConsent", "true");
        cookieStyle.style.visibility = 'hidden';
        selectBody.classList.remove('covered');
    });
}

function manageConsentButton() {
    const manage = document.querySelector('.manage-btn');
    manage.addEventListener("click", function() {
        cookieStyle.style.visibility = 'visible';
        selectBody.classList.toggle('covered');
    });
}

document.addEventListener("DOMContentLoaded", function(){
    if(!localStorage.getItem('cookieConsent')){
      cookieStyle.style.visibility = "visible";
      selectBody.classList.toggle('covered');
    }
    acceptButton();
    manageConsentButton();
  });

