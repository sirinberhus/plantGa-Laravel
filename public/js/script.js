let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let header = document.querySelector('.header-3');
let logo = document.querySelector('#header3-logo')
let navbarLinks = document.querySelectorAll('.navbar a');
let iconLinks = document.querySelectorAll('.icons a');




menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}); 

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    if(window.scrollY > 250) {
        header.classList.add('active');
        logo.style.opacity = '1';
    }else {
        header.classList.remove('active');
         logo.style.opacity = '0';
    }
}

var swiper = new Swiper(".home-slider", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop: true,
  });

let targetDate = new Date("September 31, 2024 23:59:59").getTime();

function updateCountdown() {
    let now = new Date().getTime(); 
    let distance = targetDate - now; 

    // Gün, saat, dakika ve saniye hesaplamaları
    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // HTML'de geri sayım değerlerini güncelleme
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    // Geri sayım bittiğinde yapılacaklar
    if (distance < 0) {
        clearInterval(countdownInterval);
        document.getElementById("days").innerHTML = "00";
        document.getElementById("hours").innerHTML = "00";
        document.getElementById("minutes").innerHTML = "00";
        document.getElementById("seconds").innerHTML = "00";
    
    }
}

// Geri sayımı her saniye güncelle
let countdownInterval = setInterval(updateCountdown, 1000);


navbarLinks.forEach(link => {
    link.addEventListener('click', function(e) {

        e.stopPropagation();

        navbarLinks.forEach(link => link.classList.remove('active'));

        this.classList.add('active');
    });
});
document.addEventListener('click', function() { 
    navbarLinks.forEach(link => link.classList.remove('active'));
  });

  
//icon active kodu
iconLinks.forEach(link => {
    link.addEventListener('click', function(e) {

        e.stopPropagation();

      iconLinks.forEach(link => link.classList.remove('active'));

        this.classList.add('active');
    });
});
document.addEventListener('click', function() { 
  iconLinks.forEach(link => link.classList.remove('active'));
  });

//login sayfası açma kodu
//   document.getElementById('user-icon').addEventListener('click', function(event) {
//     event.preventDefault(); // Prevent default anchor behavior
//     window.location.href = 'loginPage/login.html'; // Adjust the path to your login page
// });

