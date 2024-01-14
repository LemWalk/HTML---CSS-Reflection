
// ===== Variables ==========

const accordion = document.querySelector('.out-of-hours-title-box');
const accordion_content = document.querySelector('.out-of-hours-details');

// ====== accordion =========

accordion.addEventListener('click', (display_details));

function display_details() {
    accordion_content.classList.toggle('active');
}

// ===== Form Validation ====



//========== Prevent Default in the form ================

// const form = document.querySelector('form');

const submit_btn = document.querySelector.getElementById('contact-submit-btn');

// submit_btn.addEventListener('submit', (event) => {
//     event.preventDefault();
// });



//========= Email Validation ==============================

let email = document.getElementById("e-mail-id");
const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/

function emailValidation () {
    if(!regex.test(email.value) || email.value === '') {
            email.style.border = '1px solid #d64541;';
            email.style.boxShadow = '0 0 8px #d45b5b';
            email.placeholder = 'Please insert a valid email...';
            // console.log('email invalid');
            return true;
        } else {
            email.style.border = 'solid 1px #555';
            email.style.boxShadow = '';
            email.placeholder = '';
            // console.log('email is valid');
            clearError();
            return false;
        }
    }


    // ===== Event Listeners =========

submit_btn.addEventListener('click', (emailValidation));