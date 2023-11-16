document.getElementById('signupForm').addEventListener('submit', function(event) {
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm_password').value;

    var hasNumber = /\d/.test(password);
    var hasUpperCase = /[A-Z]/.test(password);

    if (!hasNumber || !hasUpperCase) {
        alert('Password must contain at least one numeric and one uppercase character.');
        event.preventDefault();
    } else if (password !== confirmPassword) {
        alert('Passwords do not match.');
        event.preventDefault();
    }
});

function toggleForms() {
    var signupForm = document.querySelector('.signup-form');
    var loginForm = document.querySelector('.login-form');
    var signupToggle = document.getElementById('signupToggle');
    var loginToggle = document.getElementById('loginToggle');

    if (signupForm.style.display === 'none') {
        signupForm.style.display = 'block';
        loginForm.style.display = 'none';
        signupToggle.classList.add('active');
        loginToggle.classList.remove('active');
    } else {
        signupForm.style.display = 'none';
        loginForm.style.display = 'block';
        signupToggle.classList.remove('active');
        loginToggle.classList.add('active');
    }
}
