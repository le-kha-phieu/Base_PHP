document.addEventListener('DOMContentLoaded', function () {
    document.querySelector(".remove_login").onclick = () => {
        document.querySelector(".login").classList.add('hidden')
        document.querySelector(".register").classList.remove('hidden')
    };
    document.querySelector(".remove_register").onclick = () => {
        document.querySelector(".register").classList.add('hidden')
        document.querySelector(".login").classList.remove('hidden')
    };
    document.querySelector(".forgot_password").onclick = () => {
        document.querySelector(".register").classList.add('hidden')
        document.querySelector(".login").classList.add('hidden')
        document.querySelector(".banner").classList.add('hidden')
        document.querySelector(".Content-forgot-pass").classList.remove('hidden')
    }

});


function validateEmail() {
    const emailInput = document.getElementById('email');
    const emailRequired = document.getElementById('email-required');

    const emailValue = emailInput.value.trim();
    if (emailValue === '') {
        emailRequired.textContent = 'Email is required';
    } else if (!isValidEmail(emailValue)) {
        emailRequired.textContent = 'Invalid email format';
    } else {
        emailRequired.textContent = '';
    }
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function validatePass() {
    const passwordInput = document.getElementById('password');
    const passwordRequired = document.getElementById('password-required');

    const passwordValue = passwordInput.value.trim();
    if (passwordValue === '') {
        passwordRequired.textContent = 'Password is required';
    } else if (passwordValue.length < 6) {
        passwordRequired.textContent = 'Password must be at least 6 characters';
    } else {
        passwordRequired.textContent = '';
    }
}

function validatePassCFM() {
    const passwordInput = document.getElementById('password');
    const passwordConfirmInput = document.getElementById('password_confirm');
    const passwordConfirmRequired = document.getElementById('password-confirm-required');

    const passwordConfirmValue = passwordConfirmInput.value.trim();
    const passwordValue = passwordInput.value.trim();

    if (passwordConfirmValue === '') {
        passwordConfirmRequired.textContent = 'Password confirmation is required';
        enSubmitBtn(false);
    } else if (passwordValue !== passwordConfirmValue) {
        passwordConfirmRequired.textContent = 'Passwords do not match';
        enSubmitBtn(false);
    } else {
        passwordConfirmRequired.textContent = '';
        enSubmitBtn(true);
    }
}

function signUp() {
    validateEmail();
    validatePass();
    validatePassCFM();

    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const passwordConfirmInput = document.getElementById('password_confirm');

    const emailValue = emailInput.value.trim();
    const passwordValue = passwordInput.value.trim();
    const passwordConfirmValue = passwordConfirmInput.value.trim();

    if (emailValue !== '' && isValidEmail(emailValue) &&
        passwordValue !== '' && passwordValue.length >= 6 &&
        passwordValue === passwordConfirmValue) {
        enSubmitBtn(true);
    } else {
        enSubmitBtn(false);
    }
}

function enSubmitBtn(enabled) {
    const submitButton = document.querySelector('.btn-sign-up button');
    submitButton.disabled = !enabled;
}



function validateEmailSgn() {
    const emailInput = document.getElementById('email-signin');
    const emailRequired = document.getElementById('email-signin-required');

    const emailValue = emailInput.value.trim();
    if (emailValue === '') {
        emailRequired.textContent = 'Email is required';
    } else if (!isValidEmail(emailValue)) {
        emailRequired.textContent = 'Invalid email format';
    } else {
        emailRequired.textContent = '';
    }
}

function validatePassSgn() {
    const passwordInput = document.getElementById('password-signin');
    const passwordRequired = document.getElementById('password-signin-required');

    const passwordValue = passwordInput.value.trim();
    if (passwordValue === '') {
        passwordRequired.textContent = 'Password is required';
    } else if (passwordValue.length < 6) {
        passwordRequired.textContent = 'Password must 6 characters';
    } else {
        passwordRequired.textContent = '';
    }
}

function signIn() {
    validateEmailSgn();
    validatePassSgn();

    const emailInput = document.getElementById('email-signin');
    const passwordInput = document.getElementById('password-signin');

    const emailValue = emailInput.value.trim();
    const passwordValue = passwordInput.value.trim();

    if (emailValue !== '' && isValidEmail(emailValue) &&
        passwordValue !== '' && passwordValue.length >= 6) {
        enSubmitBtnSgn(true);
    } else {
        enSubmitBtnSgn(false);
    }
}

function enSubmitBtnSgn(enabled) {
    const submitButton = document.querySelector('.btn-sign-in button');
    submitButton.disabled = !enabled;
}
