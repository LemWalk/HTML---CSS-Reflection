
// ====== accordion =========

const accordion = document.querySelector('.out-of-hours-title-box');
const accordion_content = document.querySelector('.out-of-hours-details');
const accordion_padding = document.querySelector('.business-contact-inner');

function display_details() {
    accordion_content.classList.toggle('active');
    accordion_padding.classList.toggle('active');
};

accordion.addEventListener('click', (display_details));

// ===== Success Message Close =====

const btn_success_close = document.querySelector('.submit_message_close');
const successMessage = document.querySelector('.submit_message_box');

function closeSuccessMessage() {
    successMessage.style.display = 'none';
}



btn_success_close.addEventListener('click', (closeSuccessMessage));



// ===== Form Validation =====

// const successMessage = document.querySelector('.submit_message_box');

// function displaySuccessMessage(){
//             successMessage.style.display = 'flex';
//         }
// displaySuccessMessage();

// console.log('It works');


//========== Prevent Default in the form ================

// const form = document.getElementById('contact-submit-btn');

// form.addEventListener('submit', function(event) {
//     event.preventDefault();
// });

// form.addEventListener('submit', (event) => {
//     event.preventDefault();
// });

// document.querySelector('form').addEventListener('submit', function(event) {
//     event.preventDefault();
// });



//========= Email Validation ==============================

// let email = document.getElementById("form-input-email");
// const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
// let successBox = document.getElementsByClassName('submit_message_box');

// if(emailValidation(email.value)){
//     successBox.innerHTML =`Hello`;
// }

// function emailValidation () {
//     if(!regex.test(email.value) || email.value === '') {
//             email.style.border = '3px solid #d64541;';
//             email.style.boxShadow = '0 0 8px #d45b5b';
//             // console.log('email invalid');
//             return true;
//         } else {
//             email.style.border = 'solid 1px #555';
//             email.style.boxShadow = '';
//             email.placeholder = '';
//             // console.log('email is valid');
//             clearError();
//             return false;
//         }
//     }


    // ===== Event Listeners =========

// submit_btn.addEventListener('click', (emailValidation));