

// Get the navbar
var navbar = document.querySelector(".nav-container");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Set the minimum scroll height
var minScrollHeight = 220;

// When the user scrolls down, hide the navbar
var prevScrollpos = window.scrollY;
window.onscroll = function() {
  var currentScrollPos = window.scrollY;
  if (prevScrollpos > currentScrollPos && currentScrollPos > minScrollHeight) {
    navbar.classList.add("sticky");
    navbar.style.top = "0";
  } else {
    navbar.classList.remove("sticky");
    navbar.style.top = "-220px";
  }
  prevScrollpos = currentScrollPos;
}

//====================================

