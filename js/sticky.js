
var prevScrollpos = window.scrollY;
var navbar = document.querySelector(".nav-container");
var sticky = navbar.offsetTop;

window.onscroll = function() {
  var currentScrollPos = window.scrollY;
  if (prevScrollpos > currentScrollPos && currentScrollPos > sticky) {
    navbar.classList.add("sticky");
    navbar.style.transition = "top 0.5s ease-in-out";
    navbar.style.top = "0";
  } else {    
    navbar.classList.remove("sticky");
    navbar.style.transition = "top 0.5s ease-in-out";
    navbar.style.top = "-220px";
  }
  prevScrollpos = currentScrollPos;
};

