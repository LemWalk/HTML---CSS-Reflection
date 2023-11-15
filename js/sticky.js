
// Get the navbar
var navbar = document.querySelector(".nav-container");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Set the minimum scroll height
var minScrollHeight = 0;

// When the user scrolls down, hide the navbar
var prevScrollpos = window.scrollY;
window.onscroll = function() {
  var currentScrollPos = window.scrollY;

  if (prevScrollpos > currentScrollPos && currentScrollPos > minScrollHeight) {
    navbar.classList.add("sticky");    
    navbar.style.top = "0";
  } else {
    document.querySelector('.sticky').style.transition = "top 0.5s ease-out"; 
    navbar.style.top = "-220px";
  }
  prevScrollpos = currentScrollPos;
}

//====================================

// // Get the navbar
// var navbar = document.querySelector(".nav-container");

// // Get the offset position of the navbar
// var sticky = navbar.offsetTop;

// // Set the minimum scroll height
// var minScrollHeight = 0;

// // When the user scrolls down, hide the navbar
// var prevScrollpos = window.scrollY;
// window.onscroll = function() {
//   var currentScrollPos = window.scrollY;

//   if (prevScrollpos > currentScrollPos && currentScrollPos > minScrollHeight) {
//     navbar.classList.add("sticky");    
//     navbar.style.top = "0";
//   } else if (currentScrollPos <= minScrollHeight) { // Add this condition
//     navbar.classList.remove("sticky");
//     navbar.style.top = "0";
//   } else {
//     document.querySelector('.sticky').style.transition = "top 0.5s ease-out"; 
//     navbar.style.top = "-220px";
//   }
//   prevScrollpos = currentScrollPos;
// };
