document.addEventListener('DOMContentLoaded', function() {
    const signupForm = document.querySelector('.signup-form');
    const loginForm = document.querySelector('.login_form');
    const signupLink = document.querySelector('#signup');
    const loginLink = document.querySelector('#login');
    const goBackBtn = document.querySelector('#go-back-button')
  


// loginScript.js dosyasına ekleyin
document.getElementById('go-back-button').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default anchor behavior
    window.location.href = '../'; // Adjust the path to your login page
});


const activeForm = localStorage.getItem('activeForm');
if (activeForm === 'signup') {
    signupForm.style.display = 'block';
    loginForm.style.display = 'none';
} else {
    signupForm.style.display = 'none';
    loginForm.style.display = 'block';
}

// sayfa yenilendiğinde o formda kalmak için;
signupLink.addEventListener('click', (e) => {
    e.preventDefault();
    signupForm.style.display = 'block';
    loginForm.style.display = 'none';
    localStorage.setItem('activeForm', 'signup'); // Signup formunu aktif olarak sakla
});

// signup ve login formlarını button ile  açıp kapatma
    signupLink.addEventListener('click', (e) => {
        e.preventDefault();
        signupForm.style.display = 'block';
        loginForm.style.display = 'none';
    });

    loginLink.addEventListener('click', (e) => {
        e.preventDefault();
        signupForm.style.display = 'none';
        loginForm.style.display = 'block';
    });
});


document.addEventListener('DOMContentLoaded', function() {
    // Şifre görünürlüğü ikonlarını seç
    const togglePassword = document.querySelector('#toggle-password');
    const passwordInput = document.querySelector('#password');

    // İkon tıklama olayını dinle
    togglePassword.addEventListener('click', function() {
        // Şifrenin görünürlüğünü kontrol et
        if (passwordInput.type === 'password') {
            // Şifreyi metin olarak göster
            passwordInput.type = 'text';
            togglePassword.classList.remove('uil-eye-slash');
            togglePassword.classList.add('uil-eye');
        } else {
            // Şifreyi tekrar gizle
            passwordInput.type = 'password';
            togglePassword.classList.remove('uil-eye');
            togglePassword.classList.add('uil-eye-slash');
        }
    });
});


 // Password visibility toggle for signup
 const signupTogglePassword = document.querySelector('#signup-toggle-password');
 const signupPasswordInput = document.querySelector('#signup-password');
 const confirmTogglePassword = document.querySelector('#confirm-toggle-password');
 const confirmPasswordInput = document.querySelector('#confirm-password');

 signupTogglePassword.addEventListener('click', function() {
     if (signupPasswordInput.type === 'password') {
         signupPasswordInput.type = 'text';
         signupTogglePassword.classList.remove('uil-eye-slash');
         signupTogglePassword.classList.add('uil-eye');
     } else {
         signupPasswordInput.type = 'password';
         signupTogglePassword.classList.remove('uil-eye');
         signupTogglePassword.classList.add('uil-eye-slash');
     }
 });

 confirmTogglePassword.addEventListener('click', function() {
     if (confirmPasswordInput.type === 'password') {
         confirmPasswordInput.type = 'text';
         confirmTogglePassword.classList.remove('uil-eye-slash');
         confirmTogglePassword.classList.add('uil-eye');
     } else {
         confirmPasswordInput.type = 'password';
         confirmTogglePassword.classList.remove('uil-eye');
         confirmTogglePassword.classList.add('uil-eye-slash');
     }
 });
